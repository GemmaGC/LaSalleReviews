<?php

class PracticaBestReviewController extends Controller {

    protected $view = 'practica/bestReview.tpl';
    protected $view_error405 = 'practica/noResults.tpl';

    public function build( ){
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        $review = $this->model->getMaxP();
        if(is_null($review))
        {
            $this->setLayout( $this->view_error405 );
        }else{

            $this->assign('mostrarReview', $review);
            $this->setLayout( $this->view );
        }

    }


}

