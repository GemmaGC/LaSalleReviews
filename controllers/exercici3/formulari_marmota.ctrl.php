<?php
class Exercici3FormulariMarmotaController extends Controller
{
    const REVISION = 31;

    public function build( )
    {
        $info = $this->getParams();
        var_dump($info);
        $this->assign( 'animal', $info['animal'] );
        $this->setLayout( 'exercici3/formulari_marmota.tpl' );
    }
}