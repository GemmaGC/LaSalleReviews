<?php
/**
 * Home Controller: Controller d'exemple.
 *
 * Coses a tenir en compte:
 * 	-> El controller fa un "extends Controller"
 * 	-> El controller necessitar� sempre un m�tode "public function build(){...}"
 */
class Exercici2MostraController extends Controller
{
    protected $view = 'exercici2/mostra.tpl';
    protected $view2 = 'error/error404.tpl';


    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {

        $mostra_model = $this->getClass( 'Exercici2MostraModel' ); //Importem el model per mostrar imatges

        $info = $this->getParams();

        $min = 0;
        $max = count($mostra_model->getImatges());

        //echo $max;

        if($info['url_arguments'][0] <= $min || $info['url_arguments'][0] > $max){
            $this->setLayout($this->view2);
        }else{
        $this->setLayout($this->view);

        $this->assign('enrere', '/exercici2');
        $this->assign('css', '/css/stylemicos.css');

        $this->assign('header', 'EXERCICI 2');
        $this->assign('titol', 'Mico #'.$info['url_arguments'][0]);

            //echo print_r(mysql_fetch_array($imatges));

//        if($max != 0){

            $imatges = $mostra_model->getImatges();
            //echo var_dump($imatges);

            $this->assign('min', $min-1);
            $this->assign('max', $max+1);

            $id = $info['url_arguments'][0];
            echo $id;

            //for ($x=0; $x<$max; $x++){
                $this->assign('act_img', $imatges[$id]["nom_img"]);
                $this->assign('prev_img', $imatges[$id-1]["nom_img"]);
                $this->assign('next_img', $imatges[$id+1]["nom_img"]);

                $this->assign('act_url', $imatges[$id]["url_img"]);
                $this->assign('prev_url', $imatges[$id-1]);
                $this->assign('next_url', $imatges[$id+1]);

            //}
        }
        //}


    }

    public function loadModules() {
        $modules['head']	= 'SharedHeadController';
        $modules['footer']	= 'SharedFooterController';
        return $modules;
    }
}
?>