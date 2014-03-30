<?php

class PracticaRegistreController extends Controller
{
    protected $view = 'practica/formulariRegistre.tpl';
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
