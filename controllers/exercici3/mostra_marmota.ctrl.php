<?php

class Exercici3MostraMarmotaController extends Controller
{
    protected $view = 'exercici3/mostra_marmota.tpl';

    public function build()
    {
        $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model
        $imatges = $model->getImatges('marmotas');

        $this->assign('numImg', count($imatges));

        $info = $this->getParams();

        $num = $info['num'];
        $this->assign('num', $num );
        $this->assign('segona', $num+1);
        $this->assign('tercera', $num+2);

        $this->assign('img', $imatges);

        $this->setLayout($this->view);

    }
}