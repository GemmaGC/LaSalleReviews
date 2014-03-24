<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 24/03/14
 * Time: 13:10
 */

class Exercici4EsborrarController extends Controller
{
    protected $view = 'exercici4/esborrar.tpl';

    public function build()
    {
        $this->setLayout($this->view);
    }
}