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

        $this->assign('titol', 'EXERCICI 1');
        $this->assign('benv', 'Fotografies dels micos');
        $this->assign('ant', 'Anterior');
        $this->assign('seg', 'Següent');
    }

}