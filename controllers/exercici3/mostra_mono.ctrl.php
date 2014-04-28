<?php

include_once( PATH_CONTROLLERS . 'exercici4/mostrador.ctrl.php' );

class Exercici3MostraMonoController extends Exercici4MostradorController
{
    protected $view = 'exercici3/mostra_mono.tpl';
    protected $animal = 'monos';
}