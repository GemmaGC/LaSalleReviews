<?php

class PracticaLlistatBestReviewsPuntuacioController extends Controller {
    protected $view = 'practica/llistatReviews.tpl';
    protected $view_error = 'practica/error/errorP404.tpl';

    public function build( ){

        $info = $this->getParams();
        if(sizeof($info['url_arguments']) <= 1){
            $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
            //Recuperem totes les review
            $review = $this->model->getMaxDeuP();


            for ($i = 0; $i < count($review); $i++) {
                $reviews = $this->model->getReview($review[$i]['id_review']);
                $this->assign('reviews', $reviews);
            }

            $titulo = "10 BEST RATED REVIEWS";
            $this->assign('titulo', $titulo);

            $this->setLayout( $this->view );
        }else{
            $this->setLayout( $this->view_error );
        }

    }
}

