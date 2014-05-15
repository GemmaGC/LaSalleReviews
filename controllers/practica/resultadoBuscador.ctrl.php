<?php

class PracticaResultadoBuscadorController extends Controller {
    protected $view = 'practica/resultadoBuscador.tpl';


    public function build( ){
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        //Recuperem totes les review
        $reviews = $this->model->get10R();
        $this->assign('reviews', $reviews);



        $this->setLayout( $this->view );


    }


    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';

        // Moduls especials
        $modules['llistatReviews']	= 'PracticaLlistatReviewsController';

        return $modules;
    }




}

