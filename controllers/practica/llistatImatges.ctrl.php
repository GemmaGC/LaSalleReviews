<?php

class PracticaLlistatImatgesController extends Controller {
    protected $view = 'practica/llistatImatges.tpl';
    protected $model;


    public function build( ){
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        $reviews = $this->model->get10R();
        $this->assign('reviews', $reviews);

        //llegeixImatge();

        $this->setLayout( $this->view );

    }

    protected function llegeixImatge($imatge)
    {

        header ('Content-type: ' . $imatge['tipo']);

        echo base64_decode($imatge['imagen']);
    }
}