<?php
include_once( PATH_CONTROLLERS . 'practica/dosOpcions.ctrl.php' );

class PracticaEsborraReviewController extends PracticaDosOpcionsController
{
    /*protected $view = 'practica/duesOpcions.tpl';
    protected $view_error404 = 'practica/error/errorP404.tpl';
    protected $view_error403 = 'practica/error/errorP403.tpl';
    protected $model;*/

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

        /*
        if (!strcmp('yes', Filter::getString('delete')))
        {

            $this->model->deleteReview($id);
            header('Location: /myReviews',true,301);
        }*/
    }

}