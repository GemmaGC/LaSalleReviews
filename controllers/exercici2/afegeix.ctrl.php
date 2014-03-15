<?php
/**
 * Home Controller: Controller d'exemple.
 *
 * Coses a tenir en compte:
 * 	-> El controller fa un "extends Controller"
 * 	-> El controller necessitar� sempre un m�tode "public function build(){...}"
 */
class Exercici2AfegeixController extends Controller
{
    protected $view = 'exercici2/afegeix.tpl';

    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {

        $afegeix_model = $this->getClass( 'Exercici2AfegeixModel' ); //Importem el model per carregar imatges

        $css = "/css/style.css";
        $this->setParams( array( 'css' => $css ) );


        $nom_img = Filter::getString('imgName');
        $url_img = Filter::getString("imgURL");
        if(Filter::getString('submit')){
            $afegeix_model->afegeixImatge($nom_img, $url_img);
        }


        $this->setLayout($this->view);


    }

    public function loadModules() {
        $modules['head']	= 'SharedHeadController';
        $modules['footer']	= 'SharedFooterController';
        return $modules;
    }
}
?>