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
        $info = $this->getParams();
        $this->assign('titol', 'HOME EXERCICI 4');
        $this->assign('enr', '/exercici4');

        $css = "/css/style.css";
        $this->setParams( array( 'css' => $css ) );


        $this->setLayout($this->view);
    }

    public function loadModules() {
        $modules['head']	= 'SharedHeadController';
        $modules['footer']	= 'SharedFooterController';
        return $modules;
    }
}