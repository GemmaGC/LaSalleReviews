<?php
/**
 * Home Controller de l'exercici 4
 */
class Exercici4HomeController extends Controller
{
    protected $view_home = 'exercici4/home.tpl';
    protected $view_error = 'error/error404.tpl';

    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {
        $info = $this->getParams();


        if(!isset($info['url_arguments'])){
            $this->assign('titol', 'HOME EXERCICI 4');
            $this->assign('modificar', '/visualitzarOpcions');
            $this->assign('mostrar', '/galeriaZoo');
            $this->assign('enr', '/home');

            $css = "/css/style.css";
            $this->setParams( array( 'css' => $css ) );



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
        return $modules;
    }


}
