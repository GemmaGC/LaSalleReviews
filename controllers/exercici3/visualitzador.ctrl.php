<?php
class Exercici3VisualitzadorController extends Controller
{
    const REVISION = 31;

    public function build( )
    {
        $this->assign( 'revision', self::REVISION );
        $this->setLayout( 'exercici3/visualitzador.tpl' );
    }
}