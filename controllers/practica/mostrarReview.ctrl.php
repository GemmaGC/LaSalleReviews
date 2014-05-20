<?php

class PracticaMostrarReviewController extends Controller {

    protected $view = 'practica/mostrarReview.tpl';
    protected $model;


    public function build( ){

        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        $nom = Session::getInstance()->get('nom');
        $login = Session::getInstance()->get('login');

        $id_oculta = Filter::getString('id_oculta');
        //echo $id_oculta;

        if (!$id_oculta)
        {
            unset ($id_oculta);
            $id_oculta = Session::getInstance()->get('id');
            Session::getInstance()->delete('id');
        }

        if ($login != null){
            // Redirigir a la pagina de dos opcions i omplir les dades amb la dels botons:
            // Text: You have to be logged in to rate a review. Please select what do you want to do:
            // SIGN IN - LOG IN

        }else{
            // Enviem dades a la bbdd
            // A enviar (noms de la bbdd): login_user, id_review, puntuacio
            // Suposo que login_user = login, id_review = id_oculta, i puntuacio = lo del form

            // $puntuacio = Filter::getString('newScore');
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

        return $modules;
    }




}

