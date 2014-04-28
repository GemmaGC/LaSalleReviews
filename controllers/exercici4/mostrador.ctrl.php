<?php

class Exercici4MostradorController extends Controller
{
    protected $animal;
    protected $view;

    public function build()
    {

        $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model
        $imatges = $model->getImatges($this->animal);

        $this->assign('numImg', count($imatges));

        $info = $this->getParams();

        $ter = ($info['url_arguments'][0] * 3) - 1;
        $seg = $ter - 1;
        $prim = $seg - 1;

        $this->assign('primera', $prim );
        $this->assign('segona', $seg);
        $this->assign('tercera', $ter);

        $this->assign('img', $imatges);

        $this->setLayout($this->view);
    }
}