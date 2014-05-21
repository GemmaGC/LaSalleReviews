<?php

class PracticaDosOpcionsController extends Controller
{
    protected $view = 'practica/duesOpcions.tpl';
    protected $view_error = 'practica/error/errorP404.tpl';

    protected $title;
    protected $subtitle;

    public function build( )
    {
        $info = $this->getParams();

        if(sizeof($info['url_arguments']) == 1){
            $this::carregaTitols();
            $this->assign('title', $this->title);
            $this->assign('subtitle', $this->subtitle);

            $log = Session::getInstance()->get('log');
            $this->assign('log', $log);

            $this->setLayout( $this->view );

        }else{
            $this->setLayout( $this->view_error );
        }
    }




    public function loadModules() {

        $modules['headPractica']	    = 'SharedpracticaHeadController';
        $modules['footerPractica']	    = 'SharedpracticaFooterController';

        return $modules;
    }
}