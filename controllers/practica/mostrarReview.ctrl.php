<?php

class PracticaMostrarReviewController extends Controller {

    protected $view = 'practica/mostrarReview.tpl';


    public function build( ){
        $this->setLayout( $this->view );

        $this->assign('fullReview', '/Review');
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

        // Moduls de la home especials
        $modules['twitter']	        = 'PracticaTwitterController';
        $modules['bestReview']	    = 'PracticaBestReviewController';
        $modules['llistatReviews']	= 'PracticaLlistatReviewsController';

        return $modules;
    }




}

