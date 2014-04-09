<?php

class PracticaAddReviewController extends Controller
{
    protected $view = 'practica/addReview.tpl';
    protected $model;


    public function build( )
    {
        $info = $this->getParams();
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        $this->assign('val', 0);

        if(!isset($info['url_arguments'])){

            if(Filter::getString('submit_button')){

                //Agafem les dades que posa l'usuari al addreview
                $review['title'] = Filter::getString('newTitle');
                $review['description'] = Filter::getString('newDescription');
                $review['subject'] = Filter::getString('newSubject');
                $review['date'] = Filter::getString('newDate');
                $review['score'] = Filter::getInteger('newScore');
                $review['image'] = Filter::getString('newImage');
                $this->assign('vtitle', 0); $this->assign('vdescription', 0);
                $this->assign('vsubject', 0); $this->assign('vdate', 0); $this->assign('score', 0); $this->assign('image', 0);



                //if (PracticaAddReviewController::comprovaCamps($review)){

                $this->model->afegeixReview($review['title'], $review['description'],$review['subject'], $review['date'], $review['score'], $review['image']);

                Session::getInstance()->set('title', $review['title']);
                Session::getInstance()->set('description', $review['description']);
                Session::getInstance()->set('subject', $review['subject']);
                Session::getInstance()->set('date', $review['date']);
                Session::getInstance()->set('score', $review['score']);
                Session::getInstance()->set('image', $review['image']);

                //}

                /****** ENVIAR MAIL AMB CODI D'ACTIVACIÓ DE COMPTE *********/
            }
            $this->setLayout( $this->view );
        }
    }

   /* protected function comprovaCamps($review)
    {
        $reviews = $this->model->getTot('review');
        $var = true;

        foreach($reviews as $u)
        {
            if(!strcmp($u['title'], $review['title'])|| strlen($review['title']) < 100) //Comprovem que el nom d'usuari sigui únic
            {
                $this->assign('vtitle', 1);

                $this->assign('title', $review['title']);
                $this->assign('description', $review['description']);
                $this->assign('subject', $review['subject']);
                $this->assign('date', $review['date']);
                $this->assign('score', $review['score']);
                $this->assign('image', $review['image']);


                $var = false;
            }

            if(!strcmp($u['login'], $usuari['login']) || PracticaRegistrecontroller::comprovaLogin($u['login'])) //Comprovem que el login sigui unic, tingui una llargada de 7, 2 lletres i 2 num
            {

                $this->assign('vLogin', 1);

                $this->assign('nom', $usuari['nom']);
                $this->assign('login', $usuari['login']);
                $this->assign('email', $usuari['email']);
                $this->assign('password', $usuari['password']);
                $var = false;
            }

            if(!strcmp($u['email'], $usuari['email'])) //Comprovem que l'email sigui únic
            {
                $this->assign('vMail', 1);

                $this->assign('nom', $usuari['nom']);
                $this->assign('login', $usuari['login']);
                $this->assign('email', $usuari['email']);
                $this->assign('password', $usuari['password']);
                $var = false;
            }
        }

        if(strlen($usuari['password']) < 6 || strlen($usuari['password']) > 20 ) //Comprovem que la contrassenya tingui entre 6 i 20 caràcters
        {
            $this->assign('vPas', 1);

            $this->assign('nom', $usuari['nom']);
            $this->assign('login', $usuari['login']);
            $this->assign('email', $usuari['email']);
            $this->assign('password', $usuari['password']);
            $var = false;
        }
        return $var;
    }
*/

    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
