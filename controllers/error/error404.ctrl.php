<?php

class ErrorError404Controller extends Controller
{
    protected $view = 'practica/error/errorP404.tpl';

    public function build()
    {
        $this->setLayout( $this->view );
    }

    public function loadModules()
    {
        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}


?>