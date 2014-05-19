<?php

class PracticaResultadoBuscadorController extends Controller {
    protected $view = 'practica/resultadoBuscador.tpl';
    protected $view_error405 = 'practica/noResults.tpl';


    public function build( ){
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        $palabra = Filter::getString('palabra');


        //Recuperem 10 reviews amb
       $review = $this->model->getBuscador($palabra);

        if(is_null($review))
        {
            $this->setLayout($this->view_error405);

        }
        else{

            $this->assign('review', $review);

            $this->setLayout( $this->view );
        }

    }


    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';

        // Moduls especials
        $modules['llistatReviews']	= 'PracticaLlistatReviewsController';
        $modules['llistatBestReviewsPuntuacio']	    = 'PracticaLlistatBestReviewsPuntuacioController';

        return $modules;
    }




}

