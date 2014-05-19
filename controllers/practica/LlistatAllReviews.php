<?php

class PracticaLlistatAllReviewsController extends Controller
{
    protected $view = 'practica/LlistatAllReviews.tpl';

    /**
     * Aquest m?tode sempre s'executa i caldr? implementar-lo sempre.
     */
    public function build()
    {
        $this->model = $this->getClass( 'PracticaReviewModel' );


        $reviews = $this->model->getAllReview('review');


        $this->assign('reviews', $reviews);
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
