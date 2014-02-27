<?php

class ErrorError404Controller extends Controller
{

    protected $view = 'exercici1/micos.tpl';

	public function build( )
	{
        /*$info = $this->getParams();
        if($info < 1 || $info > 10){

        }*/

        $this->setLayout( 'error/error404.tpl' );
	}

	public function loadModules()
	{
		$modules['head']	= 'SharedHeadController';
		$modules['footer']	= 'SharedFooterController';

		return $modules;
	}
}


?>