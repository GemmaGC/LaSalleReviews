<?php

class SharedHeadController extends Controller
{
	const REVISION = 31;

	public function build( )
	{

        $info = $this->getParams();
        $this->assign( 'css', $info['css'] );

		$this->assign( 'revision', self::REVISION );
		$this->setLayout( 'shared/head.tpl' );
	}
}


?>
