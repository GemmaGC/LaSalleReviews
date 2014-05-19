<?php
include_once( PATH_CONTROLLERS . 'practica/dosOpcions.ctrl.php' );

class PracticaEsborraReviewController extends PracticaDosOpcionsController
{
    protected $title;
    protected $subtitle;

    public function carregaTitols( )
    {

        $this->assign('esborrar', true);

        $nom = Session::getInstance()->get('nom');
        $this->title = "Hi ".$nom."!";
        $this->subtitle = "Are you sure you want to dele this review?";

        if (!Filter::getString('id'))
        {
            $id = Session::getInstance()->get('id');
            Session::getInstance()->delete('id');

            $model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
            $model->deleteReview($id);
            header('Location: /myReviews',true,301);

        }else{

            $id = Filter::getString('id');
            Session::getInstance()->set('id', $id);

        }
    }

}