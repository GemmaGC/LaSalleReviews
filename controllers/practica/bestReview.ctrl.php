<?php

class PracticaBestReviewController extends Controller {

    protected $view = 'practica/bestReview.tpl';


    public function build( ){
        $this->setLayout( $this->view );

        $this->assign('mostrarReview', '/Review');
    }


}

