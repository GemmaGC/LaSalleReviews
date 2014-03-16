<?php

class Exercici3AfegeixController extends Controller
{
    protected $view = 'exercici3/afegeix.tpl';
    protected $view_error = 'error/error404.tpl';

    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {

        $info = $this->getParams();

        //Li passem el css corresponent al mòdul head.
        $css = "/css/style.css";
        $this->setParams( array( 'css' => $css ) );

        if(count($info['url_arguments']) < 1){
            $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model
            $this->assign('enrere', '/exercici3');

            $nom_img = Filter::getString('imgName');
            $url_img = Filter::getString("imgURL");

            if(Filter::getString('submit_mono')){
                $model->afegeixImatge($nom_img, $url_img, 'monos');
            }
            if(Filter::getString('submit_marmota')){
                $model->afegeixImatge($nom_img, $url_img, 'marmotas');
            }
            if(Filter::getString('submit_ornitorrinco')){
                $model->afegeixImatge($nom_img, $url_img, 'ornitorrincos');
            }

            $this->setLayout($this->view);

        }else{
            $this->setLayout($this->view_error);
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