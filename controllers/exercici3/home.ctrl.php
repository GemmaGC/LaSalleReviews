<?php
/**
 * Home Controller de l'exercici 2
 */
class Exercici3HomeController extends Controller
{
    protected $view_home = 'exercici2/home.tpl';
    protected $view_head = 'shared/head.tpl';

    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {
        $info = $this->getParams();

        $this->setLayout($this->view_head);
        $this->assign('css', '/css/style.css');
        $this->assign('header', 'EXERCICI 3');

        $this->setLayout($this->view_home);
        $this->assign('afegir', '/afegeixZoo');
        $this->assign('enr', '/home');

        /*
        if(count($mostra_model->getImatges()) != 0){
            $this->assign('mostrar', '/mostra/1');
        }else{
            //Mostra missatge error
            $this->assign('mostrar', '/home');
        }*/
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