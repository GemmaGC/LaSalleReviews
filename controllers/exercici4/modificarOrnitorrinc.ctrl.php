<?php
/**
 * Modificar Controller de l'exercici 4
 */

include_once( PATH_CONTROLLERS . 'exercici4/modificar.ctrl.php' );


class Exercici4ModificarOrnitorrincController extends Exercici4ModificarController
{

    protected $animal  = 'ornitorrincos';

    public function build()
    {
        parent::carregaTemplate();
    }



}
