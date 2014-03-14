<?php

class Exercici3MostraMonoController extends Controller
{
    protected $view = 'exercici3/mostra_mono.tpl';

    public function build()
    {
        $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model
        $imatges = $model->getImatges('monos');
        $this->setLayout($this->view);

        $this->assign('img', $imatges);
        $this->assign('num', 0);
    }
}