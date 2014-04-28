<?php

class PracticaLlistatImatgesController extends Controller {
    protected $view = 'practica/llistatImatges.tpl';


    public function build( ){
        $this->setLayout( $this->view );

    }
}