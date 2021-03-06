<?php
/**
 * Home Controller: Controller d'exemple.
 *
 * Coses a tenir en compte:
 * 	-> El controller fa un "extends Controller"
 * 	-> El controller necessitar� sempre un m�tode "public function build(){...}"
 */
class PracticaMyRatedReviewsController extends Controller
{
    protected $view = 'practica/myRatedReviews.tpl';
    protected $view_error = 'practica/error/errorP404.tpl';


    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {
        $info = $this->getParams();

        if(sizeof($info['url_arguments']) == 0 || sizeof($info['url_arguments']) == 1 ){
            $this->setLayout($this->view);
        }else{
            $this->setLayout( $this->view_error );
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

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';

        // Moduls especials
        $modules['llistatMyRatedReviews']	    = 'PracticaLlistatMyRatedReviewsController';

        return $modules;
    }


}
