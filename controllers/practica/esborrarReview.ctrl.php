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
        Session::getInstance()->set('id', $id);

        if(Filter::getString('YES'))
        {
            $id = Session::getInstance()->get('id');
            $model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
            $model->deleteReview($id);
            Session::getInstance()->delete('id');
            header('Location: /myReviews/0',true,301);
        }
    }

}