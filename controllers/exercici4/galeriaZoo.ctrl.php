<?php
/**
 * Home Controller de l'exercici 4
 */
class Exercici4GaleriaZooController extends Controller
{
    protected $view_home = 'exercici3/visualitzador.tpl';
    protected $view_error = 'error/error404.tpl';
    protected $animal;
    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {

        $this->assign('header', 'EXERCICI 4');
        $this->assign('enrere', '/exercici4');

        $info = $this->getParams();
        $css = "/css/style.css";
        $this->setParams( array( 'css' => $css ) );

        $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model
        $marm = $model->getImatges('marmotas');
        $mon = $model->getImatges('monos');
        $orn = $model->getImatges('ornitorrincos');

        $max = ceil(max(count($marm), count($mon), count($orn)) / 3);

        if($info['url_arguments'][0] > 0 && $info['url_arguments'][0] <= $max){

            $ter = ($info['url_arguments'][0] * 3) - 1;
            $seg = $ter - 1;
            $prim = $seg - 1;

            $this->setParams( array( 'num' => $info['url_arguments'][0] ) );
            $this->setParams( array( 'prim' => $prim ) );
            $this->setParams( array( 'seg' => $seg ) );
            $this->setParams( array( 'ter' => $ter ) );

            $this->assign('max', $max);
            $this->assign('num', $info['url_arguments'][0]);

            $this->assign('boto_ant', '/imag/botons/enrere.png');
            $this->assign('url_ant', $info['url_arguments'][0]-1);

            $this->assign('boto_seg', '/imag/botons/seg.png');
            $this->assign('url_seg', $info['url_arguments'][0]+1);


            $this->setLayout($this->view_home);
        }else{
            $this->setLayout($this->view_error);
        }

    }


    /**
     * With this method you can load other modules that we will need in our page. You will have these modules availables in your template inside the "modules" array (example: {$modules.head}).
     * The sintax is the following:
     * $modules['name_in_the_modules_array_of_Smarty_template'] = Controller_name_to_load;
     *
     * @return array
     */

    public function loadModules() {
        $modules['head']	= 'SharedHeadController';
        $modules['footer']	= 'SharedFooterController';

        $modules['mostra_marmota']	    = 'Exercici3MostraMarmotaController';
        $modules['mostra_mono']	        = 'Exercici3MostraMonoController';
        $modules['mostra_ornitorrinco']	= 'Exercici3MostraOrnitorrincoController';

        return $modules;
    }


}
