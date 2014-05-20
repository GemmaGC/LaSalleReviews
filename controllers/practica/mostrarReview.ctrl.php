<?php

class PracticaMostrarReviewController extends Controller {

    protected $view = 'practica/mostrarReview.tpl';
    protected $model;


    public function build( ){

        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        //Busquem la Review
        $info = $this->getParams();
        $reviews = $this->model->buscaReviewTitle($info['url_arguments'][0]);
        $log = Session::getInstance()->get('log');

        //Busquem l'usuari que ha escrit la review
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


        //Rate the review
        if(Filter::getString('submit_button')){
            $punts = Filter::getString('newScore'); //Puntuacio de l'usuari
            $id_review = $reviews[0]['id']; //id de la review
            $u = $this->model->searchUser($login, $id_review);

            //Si aquest usuari encara no ha puntuat aquesta review...
            if(sizeof($u) == 0)
            {
                //Afegim la puntuació a la base de dades
                $this->model->addRate($login, $id_review, $punts);
            }else{
                $this->assign("fet", 1);
                $this->assign("score", $u[0]['puntuacio']);
                echo "Ep! Només pots puntuar una vegada cada review";
            }
        }
        $rate = $this->model->mitjana($reviews[0]['id']); //Informació dels punts de la review

        //Assignem les variables a smarty i carreguem el template

        if ($rate[0]["numVal"] > 0) $this->assign('valorada', 1);       //Mirem si està valorada o no
        $this->assign('avg', $rate[0]["sumPunts"]/$rate[0]["numVal"]);  //Mitja de punts
        $this->assign('num', $rate[0]["numVal"]);                       //Num de valoracions
        $this->assign('log', $log);                                     //Si l'usuari està logejat valdrà 1
        $this->assign('reviews', $reviews);                             //Totes les dades de la review
        $this->assign('usuari', $usuari);                               //Informació de l'usuari

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

