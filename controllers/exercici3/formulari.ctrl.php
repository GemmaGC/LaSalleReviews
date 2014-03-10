<?php
class Exercici3FormulariController extends Controller
{
    const REVISION = 31;

    public function build( )
    {
        $this->assign( 'revision', self::REVISION );
        $this->setLayout( 'exercici3/formulari.tpl' );
    }
}