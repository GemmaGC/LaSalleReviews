<?php

class PracticaLlistatMyRatedReviewsController extends Controller {
    protected $view = 'practica/llistatReviews.tpl';


    public function build( ){
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        //Recuperem totes les review
        $reviews = $this->model->get10R();
        $this->assign('reviews', $reviews);
        $titulo = "MY RATED REVIEWS";

        $this->assign('titulo', $titulo);

        $this->setLayout( $this->view );


    }
}

