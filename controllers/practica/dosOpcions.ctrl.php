<?php

class PracticaDosOpcionsController extends Controller
{
    protected $view = 'practica/duesOpcions.tpl';

    protected $title;
    protected $subtitle;

    public function build( )
    {
        $this::carregaTitols();
        $this->assign('title', $this->title);
        $this->assign('subtitle', $this->subtitle);

        $log = Session::getInstance()->get('log');
        $this->assign('log', $log);

        $this->setLayout( $this->view );
    }




    public function loadModules() {

        $modules['headPractica']	    = 'SharedpracticaHeadController';
        $modules['footerPractica']	    = 'SharedpracticaFooterController';

        return $modules;
    }
}