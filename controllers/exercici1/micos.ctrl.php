<?php
/**
 * Micos Controller: Controller dels micos.
 */
class Exercici1MicosController extends Controller
{
    protected $view = 'exercici1/micos.tpl';

    public function build()
    {
        $css = "/css/style.css";
        $this->setParams( array( 'css' => $css ) );

        $this->assign('ant', 'Anterior');
        $this->assign('seg', 'Següent');

        $this->setLayout($this->view);

    }

}