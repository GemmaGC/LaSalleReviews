<?php
/**
 * Micos Controller: Controller dels micos.
 */
class Exercici1MicosController extends Controller
{
    protected $view = 'exercici1/micos.tpl';

    public function build()
    {
        $this->setLayout($this->view);

        $text = "Enrere";
        $this->assign('enr', $text);
        $text = "Anterior";
        $this->assign('ant', $text);
        $text = "Següent";
        $this->assign('seg', $text);
    }

}