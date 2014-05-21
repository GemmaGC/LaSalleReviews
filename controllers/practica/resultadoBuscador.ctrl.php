<?php

class PracticaResultadoBuscadorController extends Controller {
    protected $view = 'practica/resultadoBuscador.tpl';
    protected $view_error405 = 'practica/noResults.tpl';
    protected $model;

    public function build( ){
        $info = $this->getParams();
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        $palabra = Filter::getString('palabra');


        //Recuperem 10 reviews amb
       $review = $this->model->getBuscador($palabra);

        if(is_null($review))
        {
            $this->assign('missatge', "Sorry, no reviews matched your search.<br>Please try again.");
            $this->setLayout($this->view_error405);

        }
        else{

            $max = round(count($review) / 10);
            $min = 0;

            //Creem un array que mostri cada 10
            $r = array_slice ( $review , $info['url_arguments'][0] * 10, 10);

            $this->assign('min', $min);
            $this->assign('max', $max);
            $this->assign('num', $info['url_arguments'][0]);

            $this->assign('url_ant', $info['url_arguments'][0]-1);
            $this->assign('url_seg', $info['url_arguments'][0]+1);

            $this->assign('review', $r);
            $this->setLayout($this->view);
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

