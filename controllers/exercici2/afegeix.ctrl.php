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

        $this->setLayout($this->view);

        $nom_img = Filter::getString('imgName');
        $url_img = Filter::getString("imgURL");

        $afegeix_model->afegeixImatge($nom_img, $url_img);



    }

    public function loadModules() {
        $modules['head']	= 'SharedHeadController';
        $modules['footer']	= 'SharedFooterController';
        return $modules;
    }
}
?>