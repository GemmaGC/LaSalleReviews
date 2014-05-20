<?php

class PracticaLlistatAllReviewsController extends Controller
{
    protected $view = 'practica/LlistatAllReviews.tpl';

    /**
     * Aquest m?tode sempre s'executa i caldr? implementar-lo sempre.
     */
    public function build()
    {
        $info = $this->getParams();
        $this->model = $this->getClass( 'PracticaReviewModel' );

        $reviews = $this->model->getTot('review');

        $max = round(count($reviews) / 10);
        $min = 0;

        //Creem un array que mostri cada 10
        $r = array_slice ( $reviews , $info['url_arguments'][0] * 10, 10);

        //$this->setParams( array( 'num' => $info['url_arguments'][0] ) );

        $this->assign('min', $min);
        $this->assign('max', $max);
        $this->assign('num', $info['url_arguments'][0]);

        $this->assign('url_ant', $info['url_arguments'][0]-1);
        $this->assign('url_seg', $info['url_arguments'][0]+1);

        $this->assign('reviews', $r);
        $this->setLayout($this->view);



    }


    /**
     * With this method you can load other modules that we will need in our page. You will have these modules availables in your template inside the "modules" array (example: {$modules.head}).
     * The sintax is the following:
     * $modules['name_in_the_modules_array_of_Smarty_template'] = Controller_name_to_load;
     *
     * @return array
     */


    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';

        return $modules;
    }


}