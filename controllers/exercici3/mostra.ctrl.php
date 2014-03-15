<?php

class Exercici3MostraController extends Controller
{
    protected $view = 'exercici3/visualitzador.tpl';
    protected $view2 = 'error/error404.tpl';



    /**
     * Aquest m?tode sempre s'executa i caldr? implementar-lo sempre.
     */
    public function build()
    {

            $this->setLayout($this->view);

            $this->assign('header', 'EXERCICI 3');


    }

    public function loadModules() {

        $modules['head']	                = 'SharedHeadController';
        $modules['footer']	                = 'SharedFooterController';
        //$modules['mostra_botons']	        = 'Exercici3MostraBotonsController';
        $modules['mostra_marmota']	    = 'Exercici3MostraMarmotaController';
        $modules['mostra_mono']	        = 'Exercici3MostraMonoController';
        $modules['mostra_ornitorrinco']	= 'Exercici3MostraOrnitorrincoController';
        return $modules;
    }
}