<?php

class SharedpracticaHeadController extends Controller
{

	public function build( )
	{
        $log = Session::getInstance()->get('log');
        $this->assign('log', $log);

        //echo $log;

        $nom = Session::getInstance()->get('nom');
        $this->assign('nom', $nom);

        //echo "   ----   "; echo $nom;
        $login = Session::getInstance()->get('login');
        $this->assign('login', $login);
        //echo "   ----   "; echo $login;

		$this->setLayout( 'practica/shared/head.tpl' );
	}
}


?>
