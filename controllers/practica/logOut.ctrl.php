<?php

include_once( PATH_CONTROLLERS . 'practica/dosOpcions.ctrl.php' );

class PracticaLogoutController extends PracticaDosOpcionsController
{
    protected $title = 'titol';
    protected $subtitle = 'subtitol';


    public function carregaTitols( )
    {

        $nom = Session::getInstance()->get('nom');
        $this->title = "BYE BYE ".$nom."! </br> YOU'VE JUST LOGGED OUT!";

        $this->subtitle = "What do you want to do now?";

        Session::getInstance()->delete('nom');
        Session::getInstance()->delete('login');

        Session::getInstance()->set('log', 0);
    }
}