<?php

class SharedpracticaHeadController extends Controller
{
    protected $model;


	public function build( )
	{
        $log = Session::getInstance()->get('log');
        $this->assign('log', $log);

        $nom = Session::getInstance()->get('nom');
        $this->assign('nom', $nom);

        $login = Session::getInstance()->get('login');
        $this->assign('login', $login);

        $this->setLayout( 'practica/shared/head.tpl' );
	}


}


?>
