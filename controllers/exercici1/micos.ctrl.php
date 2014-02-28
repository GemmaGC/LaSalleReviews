<?php
/**
 * Micos Controller: Controller dels micos.
 */
class Exercici1MicosController extends Controller
{
    protected $view = 'exercici1/micos.tpl';
    protected $text;

    public function build()
    {
        $this->setLayout($this->view);

        $this->text = 'Enrere';
        $this->assign('enr', $this->text);
        $this->text = 'Anterior';
        $this->assign('ant', $this->text);
        $this->text = 'Següent';
        $this->assign('seg', $this->text);
    }

}