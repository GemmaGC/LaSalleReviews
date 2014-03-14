<?php

class Exercici3AfegeixController extends Controller
{
    protected $view = 'exercici3/afegeix.tpl';

    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {

        $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model

        $this->setLayout($this->view);


        $this->assign('enrere', '/exercici3');

        $animal = 'MICO';
        $this->setParams( array( 'animal' => $animal ) );

        $nom_img = Filter::getString('imgName');
        $url_img = Filter::getString("imgURL");

        if(Filter::getString('submit')){
            $model->afegeixImatge($nom_img, $url_img, $animal);
        }

    }

    public function loadModules() {
        $modules['head']	                = 'SharedHeadController';
        $modules['footer']	                = 'SharedFooterController';
        $modules['formulari_mono']	        = 'Exercici3FormulariMonoController';
        $modules['formulari_ornitorrinco']	= 'Exercici3FormulariOrnitorrincoController';
        $modules['formulari_marmota']	    = 'Exercici3FormulariMarmotaController';
        return $modules;
    }
}