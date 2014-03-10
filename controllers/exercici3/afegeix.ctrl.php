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

        $animal = 'monos';
        $this->setParams( array( 'animals' => $animal ) );

        $nom_img = Filter::getString('imgName');
        $url_img = Filter::getString("imgURL");

        if(Filter::getString('submit')){
            $model->afegeixImatge($nom_img, $url_img, $animal);
        }

    }

    public function loadModules() {
        $modules['head']	    = 'SharedHeadController';
        $modules['footer']	    = 'SharedFooterController';
        $modules['formulari']	= 'Exercici3FormulariController';
        return $modules;
    }
}