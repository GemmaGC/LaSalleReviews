<?php
/**
 * Home Controller: Controller d'exemple.
 *
 * Coses a tenir en compte:
 * 	-> El controller fa un "extends Controller"
 * 	-> El controller necessitar� sempre un m�tode "public function build(){...}"
 */
class PracticaLlistatReviewsUsuariController extends Controller
{
    protected $view = 'practica/llistatReviewsUsuari.tpl';

    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {
        $this->model = $this->getClass( 'PracticaReviewModel' );

        $nom = Session::getInstance()->get('nom');
        $login = Session::getInstance()->get('login');

        $reviews = $this->model->getUsuariReview($login,$nom);

        /***************************************/
        $info = $this->getParams();


        //És la forma més cutre de calcular el màxim de pàgines, ja ho optimitzarem
        $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model
        $marm = count($model->getImatges('marmotas'));
        $mon = count($model->getImatges('monos'));
        $orn = count($model->getImatges('ornitorrincos'));

        $max = max($marm, $mon, $orn);
        $min = 0;

        $this->assign('header', 'EXERCICI 3');
        $this->assign('enrere', '/exercici3');

        $this->setParams( array( 'num' => $info['url_arguments'][0] ) );

        $this->assign('min', $min);
        $this->assign('max', $max);
        $this->assign('num', $info['url_arguments'][0]);

        $this->assign('url_ant', $info['url_arguments'][0]-3);
        $this->assign('url_seg', $info['url_arguments'][0]+3);

        /***************************************/


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
