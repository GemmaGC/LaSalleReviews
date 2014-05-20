<?php

class PracticaMostrarReviewController extends Controller {

    protected $view = 'practica/mostrarReview.tpl';
    protected $model;


    public function build( ){

        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        $id_oculta = Filter::getString('id_oculta');

        if (!$id_oculta)
        {
            unset ($id_oculta);
            $id_oculta = Session::getInstance()->get('id');
            Session::getInstance()->delete('id');
        }

        $reviews = $this->model->getReview($id_oculta);
        $login = $reviews[0]['login'];
        $usuari = $this->model->getUsuari($login);

        $source = $reviews[0]['date'];
        $date = new DateTime($source);
        $date->format('d.m.Y');
        $this->assign('date_esp', $date->format('d.m.Y'));

        $source = $reviews[0]['data_creacio'];
        $dateC = new DateTime($source);
        $dateC->format('d.m.Y');
        $this->assign('date_creacio_esp', $dateC->format('d.m.Y'));

        $this->assign('reviews', $reviews);
        $this->assign('usuari', $usuari);
        $this->setLayout( $this->view );


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

