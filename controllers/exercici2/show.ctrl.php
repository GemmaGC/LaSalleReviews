<?php
/**
 * Home Controller: Controller d'exemple.
 *
 * Coses a tenir en compte:
 * 	-> El controller fa un "extends Controller"
 * 	-> El controller necessitar� sempre un m�tode "public function build(){...}"
 */
class ShowExercici2Controller extends Controller
{
    protected $view = 'exercici1/micos.tpl';
    protected $view2 = 'error/error404.tpl';

    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {
        $info = $this->getParams();
        $min = 1;
        $max = 10;

        if($info['url_arguments'][0] < $min || $info['url_arguments'][0] > $max || $info['url_arguments'] > 1){
            $this->setLayout($this->view2);
        }else{
            $this->setLayout($this->view);

            $this->assign('exercici', '/exercici1');

            $this->assign('min', $min-1);
            $this->assign('max', $max+1);

            $this->assign('titol', 'Mico #'.$info['url_arguments'][0]);

            $this->assign('act_img', $info['url_arguments'][0]);
            $this->assign('prev_img', ($info['url_arguments'][0]-1));
            $this->assign('next_img', ($info['url_arguments'][0]+1));

            $this->assign('act_url', '/imag/exercici1/'.$info['url_arguments'][0].'.jpg');
            $this->assign('prev_url', '/micos/'.($info['url_arguments'][0]-1));
            $this->assign('next_url', '/micos/'.($info['url_arguments'][0]+1));
        }


    }

    public function loadModules() {
        $modules['head']	= 'SharedHeadController';
        $modules['footer']	= 'SharedFooterController';
        return $modules;
    }
}
?>