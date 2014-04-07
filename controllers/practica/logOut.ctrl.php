<?php

class PracticaLogoutController extends Controller
{
    protected $view = 'practica/missatgeLogOut.tpl';

    public function build( )
    {
        $nom = Session::getInstance()->get('nom');
        $this->assign('nom', $nom);


        Session::getInstance()->delete('nom');
        Session::getInstance()->delete('login');

        Session::getInstance()->set('log', 0);

        $this->setLayout( $this->view );
    }

    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}