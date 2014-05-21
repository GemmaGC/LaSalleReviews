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
        $l = Session::getInstance()->get('login');

        //Mirem si cal redirigir...
        if($reviews[0]['old_title'] != null && !strcmp($info['url_arguments'][0], str_replace(' ', '-', $reviews[0]['old_title']))){
            $nova = true;
            $this->assign('nova', $nova);
        }
        if(is_null($reviews[0]['old_title']) || $nova){
            //Si no hi ha nou titol i el titol que hi ha a la url és el nou titol...
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


            //************/
            /*  RATE RW  */
            //************/
            $id_review = $reviews[0]['id']; //id de la review
            $u = $this->model->searchUser($l, $id_review);

            //previamente ya ha sido puntuada
            if(sizeof($u) > 0){
                //Si ja ha valorat aquesta review...
                $this->assign("fet", 1);
                $this->assign("score", $u[0]['puntuacio']);

                //Si vol editar la valoracio...
                if(Filter::getString('submit_edit')){
                    $this->assign("edita", 1);
                }

                if(Filter::getString('submit_save'))
                {
                    $punts = Filter::getString('score'); //Puntuacio de l'usuari
                    $this->model->editRate($l, $id_review, $punts);
                    $this->assign("edita", 0);
                    $this->assign("score", $punts);
                }

                //Si vol esborrar la valoracio...
                if(Filter::getString('submit_delete')){
                    $this->assign("fet", 0);
                    $this->model->deleteRate($u[0]['id']);
                }

            }else{

                //Si encara no ha valorat la review i fa click al submit...
                if(Filter::getString('submit_button')){

                        $punts = Filter::getString('newScore'); //Puntuacio de l'usuari
                        //Afegim la puntuació a la base de dades
                        $this->model->addRate($l, $id_review, $punts);
                        $this->assign("fet", 1);
                }

            }
            $rate = $this->model->mitjana($reviews[0]['id']); //Informació dels punts de la review

            //Assignem les variables a smarty i carreguem el template

            if ($rate[0]["numVal"] > 0) $this->assign('valorada', 1);       //Mirem si està valorada o no
            $this->assign('avg', $rate[0]["sumPunts"]/$rate[0]["numVal"]);  //Mitja de punts
            $this->assign('num', $rate[0]["numVal"]);                       //Num de valoracions
            $this->assign('log', $log);                                     //Si l'usuari està logejat valdrà 1
            $this->assign('r', $reviews[0]);                             //Totes les dades de la review
            $this->assign('usuari', $usuari);                               //Informació de l'usuari

            $this->setLayout( $this->view );

        }else{
            //Sino... redirigim al nou titol
            $url = $reviews[0]['old_title'];
            $url = str_replace(' ', '-', $url);
            header('Location: /r/'.$url,true,301);
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

        return $modules;
    }




}

