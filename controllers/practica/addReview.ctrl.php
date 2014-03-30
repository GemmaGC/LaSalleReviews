<?php

class PracticaAddReviewController extends Controller
{
    protected $view = 'practica/addReview.tpl';

    public function build( )
    {

        $this->setLayout( $this->view );

    }

    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
