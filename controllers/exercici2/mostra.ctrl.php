<?php
/**
 * Home Controller: Controller d'exemple.
 *
 * Coses a tenir en compte:
 * 	-> El controller fa un "extends Controller"
 * 	-> El controller necessitar? sempre un m?tode "public function build(){...}"
 */
class Exercici2MostraController extends Controller
{
    protected $view = 'exercici2/mostra.tpl';
    protected $view2 = 'error/error404.tpl';


    /**
     * Aquest m?tode sempre s'executa i caldr? implementar-lo sempre.
     */
    public function build()
    {

        $mostra_model = $this->getClass( 'Exercici2MostraModel' ); //Importem el model per mostrar imatges

        $info = $this->getParams();

        $min = 0;
        $max = count($mostra_model->getImatges());

        if($info['url_arguments'][0] <= $min || $info['url_arguments'][0] > $max){
            $this->setLayout($this->view2);
        }else{

            $css = "/css/style.css";
            $this->setParams( array( 'css' => $css ) );

            $this->assign('enrere', '/exercici2');

            $this->assign('header', 'EXERCICI 2');
            $this->assign('titol', 'Mico #'.$info['url_arguments'][0]);

            $imatges = $mostra_model->getImatges();

            $this->assign('imgmonos',$imatges);
            $this->assign('nummono',$info['url_arguments'][0]-1);
            $this->assign('min', $min-1);
            $this->assign('max', $max-1);
            $this->assign('siguiente',$info['url_arguments'][0]+1);

            $this->setLayout($this->view);

        }



    }

    public function loadModules() {
        $modules['head']	= 'SharedHeadController';
        $modules['footer']	= 'SharedFooterController';
        return $modules;
    }
}
?>