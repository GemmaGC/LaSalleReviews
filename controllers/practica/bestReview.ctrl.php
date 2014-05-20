<?php

class PracticaBestReviewController extends Controller {

    protected $view = 'practica/bestReview.tpl';
    protected $view_error405 = 'practica/noResults.tpl';
    protected $model;

    public function build( ){
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        $review = $this->model->getMaxP();

        if(is_null($review))
        {
            $this->setLayout( $this->view_error405 );
        }else{

            $this->assign('mostrarReview', $review);

            $source = $review[0]['date'];
            $date = new DateTime($source);
            $date->format('d.m.Y');

            $this->assign('date_esp', $date->format('d.m.Y'));


            $this->setLayout( $this->view );
        }

    }


}

