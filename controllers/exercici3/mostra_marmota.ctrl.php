<?php

class Exercici3MostraMarmotaController extends Controller
{
    protected $view = 'exercici3/mostra_marmota.tpl';

    public function build()
    {
        $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model
        $imatges = $model->getImatges('marmotas');
        $this->setLayout($this->view);

        $this->assign('img', $imatges);
        $this->assign('num', 0);
    }
}