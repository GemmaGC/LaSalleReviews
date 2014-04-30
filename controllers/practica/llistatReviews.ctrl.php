<?php

class PracticaLlistatReviewsController extends Controller {
    protected $view = 'practica/llistatReviews.tpl';


    public function build( ){
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        //Recuperem totes les review
        $reviews = $this->model->get10R();
        $this->assign('reviews', $reviews);

        $this->setLayout( $this->view );

    }
}

