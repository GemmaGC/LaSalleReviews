<?php

class PracticaLlistatBestReviewsPuntuacioController extends Controller {
    protected $view = 'practica/llistatReviews.tpl';


    public function build( ){
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        //Recuperem totes les review
        $review = $this->model->getMaxDeuP();


        for ($i = 0; $i < count($review); $i++) {
            $reviews = $this->model->getReview($review[$i]['id_review']);
            $this->assign('reviews', $reviews);
            echo $reviews[0]['title'];
        }




        $titulo = "10 BESTTER RATED REVIEWS";
        $this->assign('titulo', $titulo);

        $this->setLayout( $this->view );


    }
}

