<?php

class Exercici3MostraOrnitorrincoController extends Controller
{
    protected $view = 'exercici3/mostra_ornitorrinco.tpl';

    public function build()
    {
        $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model
        $imatges = $model->getImatges('ornitorrincos');
        $this->setLayout($this->view);

        $this->assign('img', $imatges);
        $this->assign('num', 0);
    }
}