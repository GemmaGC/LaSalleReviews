<?php
class ErrorErrorP403Controller extends Controller
{

    protected $view = 'practica/error/errorP403.tpl';

    public function build( )
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