<?php

class PracticaResultadoBuscadorController extends Controller {
    protected $view = 'practica/resultadoBuscador.tpl';
    protected $view_error404 = 'practica/error/errorP404.tpl';


    public function build( ){
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        $palabra = Filter::getString('palabra');


        //Recuperem 10 reviews amb
       $reviews = $this->model->getBuscador($palabra);

        if(is_null($reviews))
        {
            $this->setLayout($this->view_error404);

        }
        else{

            $this->assign('reviews', $reviews);

            $this->setLayout( $this->view );
        }

    }


    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';

        // Moduls especials
        $modules['llistatReviews']	= 'PracticaLlistatReviewsController';

        return $modules;
    }




}

