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

        $css = "/css/style.css";
        $this->setParams( array( 'css' => $css ) );

        $info = $this->getParams();

        $this->assign('header', 'EXERCICI 3');

        $this->assign('enrere', '/exercici3');

        $this->setParams( array( 'num' => $info['url_arguments'][0] ) );

        //És la forma més cutre de calcular el màxim de pàgines, ja ho optimitzarem
        $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model
        $marm = count($model->getImatges('marmotas'));
        $mon = count($model->getImatges('monos'));
        $orn = count($model->getImatges('ornitorrincos'));

        $max = max($marm, $mon, $orn);


        $this->assign('min', 0);
        $this->assign('max', $max);
        $this->assign('num', $info['url_arguments'][0]);

        $this->assign('boto_ant', '/imag/botons/enrere.png');
        $this->assign('url_ant', $info['url_arguments'][0]-3);

        $this->assign('boto_seg', '/imag/botons/seg.png');
        $this->assign('url_seg', $info['url_arguments'][0]+3);


        $this->setLayout($this->view);


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