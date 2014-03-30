<?php

class PracticaLoginController extends Controller
{
    protected $view = 'practica/formulariLogin.tpl';

    public function build( )
    {

        header('Location: /LaSalleReview/logIn',false);
        $this->setLayout( $this->view );

    }

    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
