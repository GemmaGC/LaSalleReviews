<?php

include_once( PATH_CONTROLLERS . 'exercici4/mostrador.ctrl.php' );

class Exercici3MostraMarmotaController extends Exercici4MostradorController
{
    protected $view = 'exercici3/mostra_marmota.tpl';
    protected $animal = 'marmotas';
}