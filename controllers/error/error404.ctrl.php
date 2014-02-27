<?php

class ErrorError404Controller extends Controller
{

    protected $view = 'exercici1/micos.tpl';

	public function build( )
	{
        $info = $this->getParams();

        if($info[url_arguments][1] < 1 || $info[url_arguments][1] > 10){
            $this->setLayout( 'error/error404.tpl' );
        }

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