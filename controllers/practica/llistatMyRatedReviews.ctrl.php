<?php

class PracticaLlistatMyRatedReviewsController extends Controller {
    protected $view = 'practica/llistatReviews.tpl';
    protected $view_error405 = 'practica/noResults.tpl';
    protected $model;

    public function build( ){
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        //Recuperem totes les review
        $puntuacions = $this->model->getTot('puntuacions');

        $login = Session::getInstance()->get('login');
        $reviews = array();
        foreach ($puntuacions as $p)
        {
            if(!strcmp($p['login_user'], $login))
            {
                $r = $this->model->getReview($p['id_review']);

                array_push($reviews, $r[0]);
            }
        }

        //Comprovem si l'usuari ha puntuat alguna review...
        if(!sizeof($reviews))
        {
            $this->assign("missatge", "You haven't rated any review yet.");
            $this->setLayout($this->view_error405);

        }else{

            $this->assign('reviews', $reviews);
            $titulo = "MY RATED REVIEWS";

            $this->assign('titulo', $titulo);

            $this->setLayout( $this->view );
        }

    }
}

