<?php

class PracticaResultadoBuscadorController extends Controller {
    protected $view = 'practica/resultadoBuscador.tpl';


    public function build( ){
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        $palabra = Filter::getString('palabra');
        $filter = Filter::getString('filter');
        $url = $this->getParams();

        //Recuperem totes les review
        $reviews = $this->model->get10R();
        $this->assign('reviews', $reviews);

        $this->setLayout( $this->view );


    }
}

