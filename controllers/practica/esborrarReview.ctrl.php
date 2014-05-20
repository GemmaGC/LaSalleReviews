<?php
include_once( PATH_CONTROLLERS . 'practica/dosOpcions.ctrl.php' );

class PracticaEsborraReviewController extends PracticaDosOpcionsController
{
    protected $title;
    protected $subtitle;

    public function carregaTitols( )
    {

        $info = $this->getParams();
        $this->assign('esborrar', true);

        $nom = Session::getInstance()->get('nom');
        $this->title = "Hi ".$nom."!";
        $this->subtitle = "Are you sure you want to delete this review?";

        $id = $info['url_arguments'][0];

        $model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        $model->deleteReview($id);
        header('Location: /myReviews/0',true,301);
    }

}