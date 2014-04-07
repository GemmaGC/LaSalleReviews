<?php

class PracticaLoginController extends Controller
{
    protected $view = 'practica/formulariLogin.tpl';

    public function build( )
    {

        $info = $this->getParams();
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        if(!isset($info['url_arguments'])){


            $this->setLayout( $this->view );
        }


    }

    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
