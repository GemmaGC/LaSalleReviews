<?php

class Exercici3MostraOrnitorrincoController extends Controller
{
    protected $view = 'exercici3/mostra_ornitorrinco.tpl';

    public function build()
    {
        $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model
        $imatges = $model->getImatges('ornitorrincos');

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