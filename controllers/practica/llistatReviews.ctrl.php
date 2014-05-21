<?php

class PracticaLlistatReviewsController extends Controller {
    protected $view = 'practica/llistatReviews.tpl';
    protected $view_error = 'practica/error/errorP404.tpl';

    public function build( ){

        $info = $this->getParams();

        if(sizeof($info['url_arguments']) == 0){
            $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
            //Recuperem totes les review
            $reviews = $this->model->get10R();
            $this->assign('reviews', $reviews);
            $titulo = "LAST 10 REVIEWS";

            $this->assign('titulo', $titulo);

            $this->setLayout( $this->view );
        }else{
            $this->setLayout( $this->view_error );
        }


    }
}

