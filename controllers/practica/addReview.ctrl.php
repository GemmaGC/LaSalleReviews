<?php

class PracticaAddReviewController extends Controller
{
    protected $view = 'practica/addReview.tpl';
    protected $model;

    public function build( )
    {
        $info = $this->getParams();
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model


        if(!isset($info['url_arguments'])){

            if(Filter::getString('submit_button')){

                //Agafem les dades que posa l'usuari al addreview
                $review['title'] = Filter::getString('newTitle');
                $review['description'] = Filter::getString('newDescription');
                $review['subject'] = Filter::getString('newSubject');
                $review['date'] = Filter::getString('newDate');
                $review['score'] = Filter::getInteger('newScore');
                $review['image'] = Filter::getString('newImage');

var_dump($review);

                //$this->assign('vNom', 0); $this->assign('vLogin', 0); $this->assign('vMail', 0); $this->assign('vPas', 0);

                $this->model->afegeixReview($review['title'], $review['description'],$review['subject'], $review['date'], $review['score'], $review['image']);

                Session::getInstance()->set('title', $review['title']);
                Session::getInstance()->set('description', $review['description']);
                Session::getInstance()->set('subject', $review['subject']);
                Session::getInstance()->set('date', $review['date']);
                Session::getInstance()->set('score', $review['score']);
                Session::getInstance()->set('image', $review['image']);



                /****** ENVIAR MAIL AMB CODI D'ACTIVACIÓ DE COMPTE *********/
            }
            $this->setLayout( $this->view );
        }
    }

    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
