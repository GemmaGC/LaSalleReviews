<?php
/**
 * Micos Controller: Controller dels micos.
 */
class Exercici1MicosController extends Controller
{
    protected $view = 'exercici1/micos.tpl';
    protected $view2 = 'error/error404.tpl';

    public function build()
    {
        $info = $this->getParams();
        /*echo '<pre>';print_r( $info );echo '</pre>';

        if($info[url_arguments][0] < 1 || $info[url_arguments][0] > 10){
            $this->assign('img', $info[url_arguments][0]);
            echo '<pre>';print_r( $this->view );echo '</pre>';
            $this->setLayout($this->view);
        }else{
            $this->setLayout($this->view2);
            echo '<pre>';print_r( $this->view2 );echo '</pre>';
        }*/
        $this->setLayout($this->view);
    }

    /**
     * With this method you can load other modules that we will need in our page. You will have these modules availables in your template inside the "modules" array (example: {$modules.head}).
     * The sintax is the following:
     * $modules['name_in_the_modules_array_of_Smarty_template'] = Controller_name_to_load;
     *
     * @return array
     */
    /*public function loadModules() {
        $modules['head']	= 'SharedHeadController';
        $modules['footer']	= 'SharedFooterController';
        return $modules;
    }
    */
}