<?php
/**
 * Micos Grans Controller: Controller dels micos grans.
 */
class Exercici1BotonsController extends Controller
{
    protected $view = 'exercici1/micos.tpl';
    protected $view2 = 'error/error404.tpl';

    public function build()
    {
        $info = $this->getParams();
/*
        $this->setLayout($this->view);

        $this->assign('act_img', $info[url_arguments][0]);
        $this->assign('prev_img', $info[url_arguments][0] -1);
        $this->assign('next_img', $info[url_arguments][0] +1);
*/
        if($info['url_arguments'][0] < 1 || $info['url_arguments'][0] > 10){
            $this->setLayout($this->view2);
        }else{

            $css = "/css/style.css";
            $this->setParams( array( 'css' => $css ) );

            $this->assign('enrere', '/exercici1');

            $this->assign('min', 0);
            $this->assign('max', 11);

            $this->assign('header', 'EXERCICI 1');
            $this->assign('titol', 'Mico #'.$info['url_arguments'][0]);

            $this->assign('act_img', $info['url_arguments'][0]);
            $this->assign('prev_img', ($info['url_arguments'][0]-1));
            $this->assign('next_img', ($info['url_arguments'][0]+1));

            $this->assign('act_url', '/imag/exercici1/'.$info['url_arguments'][0].'.jpg');
            $this->assign('prev_url', '/micos/'.($info['url_arguments'][0]-1));
            $this->assign('next_url', '/micos/'.($info['url_arguments'][0]+1));


            $this->setLayout($this->view);


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