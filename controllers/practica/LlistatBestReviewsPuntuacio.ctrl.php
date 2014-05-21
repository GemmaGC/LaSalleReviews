<?php

class PracticaLlistatBestReviewsPuntuacioController extends Controller {
    protected $view = 'practica/LlistatBestReviews.tpl';
    protected $view_error = 'practica/error/errorP404.tpl';

    public function build( ){

        $info = $this->getParams();
        if(sizeof($info['url_arguments']) <= 1){
            $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
            //Recuperem totes les review
            $review = $this->model->getMaxDeuP();


            for ($i = 0; $i < count($review); $i++) {
                $reviews[$i] = $this->model->getReview($review[$i]['id_review']);


            }
            $this->assign('numreviews', count($review));

            if(count($review)>0){
            $this->assign('reviews0', $reviews[0]);
            }
            if(count($review)>1){
            $this->assign('reviews1', $reviews[1]);
            }
            if(count($review)>2){
            $this->assign('reviews2', $reviews[2]);
            }
            if(count($review)>3){
            $this->assign('reviews3', $reviews[3]);
            }
            if(count($review)>4){
            $this->assign('reviews4', $reviews[4]);
            }
            if(count($review)>5){
            $this->assign('reviews5', $reviews[5]);
            }
            if(count($review)>6){
            $this->assign('reviews6', $reviews[6]);
            }
            if(count($review)>7){
            $this->assign('reviews7', $reviews[7]);
            }
            if(count($review)>8){
            $this->assign('reviews8', $reviews[8]);
            }
            if(count($review)>9){
            $this->assign('reviews9', $reviews[9]);
            }
            $titulo = "10 BEST RATED REVIEWS";
            $this->assign('titulo', $titulo);

            $this->setLayout( $this->view );
        }else{
            $this->setLayout( $this->view_error );
        }

    }
}

