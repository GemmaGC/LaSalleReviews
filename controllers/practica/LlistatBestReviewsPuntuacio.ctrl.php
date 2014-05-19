<?php

class PracticaLlistatBestReviewsPuntuacioController extends Controller {
    protected $view = 'practica/llistatReviews.tpl';


    public function build( ){
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        //Recuperem totes les review
        $reviews = $this->model->getMaxDeuP();
        $this->assign('reviews', $reviews);

        $titulo = "10 BEST RATED REVIEWS";
        $this->assign('titulo', $titulo);

        $this->setLayout( $this->view );


    }
}

