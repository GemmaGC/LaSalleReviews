<?php

class PracticaLoginController extends Controller
{
    protected $view = 'practica/formulariLogin.tpl';

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
