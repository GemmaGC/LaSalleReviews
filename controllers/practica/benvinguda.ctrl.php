<?php

class PracticaBenvingudaController extends Controller
{
    protected $view = 'practica/benvinguda.tpl';
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
