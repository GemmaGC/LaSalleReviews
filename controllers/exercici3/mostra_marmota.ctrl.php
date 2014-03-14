<?php

class Exercici3MostraMarmotaController extends Controller
{
    protected $view = 'exercici3/mostra_marmota.tpl';

    public function build()
    {
        $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model
        $imatges = $model->getImatges('marmotas');
        $this->assign('numImg', count($imatges));
        $this->assign('segona', 1);
        $this->assign('tercera', 2);
        $this->assign('img', $imatges);
        $this->assign('num', 0);
        $this->setLayout($this->view);

    }
}