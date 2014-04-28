<?php

include_once( PATH_CONTROLLERS . 'exercici4/mostrador.ctrl.php' );

class Exercici3MostraOrnitorrincoController extends Exercici4MostradorController
{
    protected $view = 'exercici3/mostra_ornitorrinco.tpl';
    protected $animal = 'ornitorrincos';
}