<?php

class PracticaAddReviewController extends Controller
{
    protected $view = 'practica/addReview.tpl';
    protected $view_error404 = 'practica/error/errorP404.tpl';
    protected $view_error403 = 'practica/error/errorP403.tpl';
    protected $model;


    public function build( )
    {

        $info = $this->getParams();
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        $this->assign('val', 0);

        $login = Session::getInstance()->get('log');
        $nom = Session::getInstance()->get('nom');
        $dataC = date('d/m/Y', time());

        if(!isset($info['url_arguments']) && $login > 0){

            if(Filter::getString('submit_button')){

                //Agafem les dades que posa l'usuari al addreview
                $review['title'] = Filter::getString('newTitle');
                $review['description'] = Filter::getString('newDescription');
                $review['subject'] = Filter::getString('newSubject');
                $review['date'] = Filter::getString('newDate');
                $review['score'] = Filter::getInteger('newScore');
                $review['image'] = Filter::getString('newImage');

                /*$this->assign('vtitle', 0); $this->assign('description', 0);
                $this->assign('subject', 0); $this->assign('date', 0);
                $this->assign('score', 0); $this->assign('vimage', 0);*/



               if ($this->comprovaCamps($review)){

                   //IMATGE
                   $dir = "/imag/img_usuaris/"; //recuerda que debe tener permisos de escritura ;)
                   $ext = array('image/jpeg', 'image/gif', 'image/png', 'image/bmp'); //Puedes agregar más extenciones


                   var_dump($_FILES);
                   //foreach($_FILES as $archivo) {
                   $attachtmp  = $_FILES['newImage']['tmp_name'];


                   $attachtype = $_FILES['newImage']['type'];
                   $attachname = $_FILES['newImage']['name'];

                   //if(file_exists($attachtmp)) {
                   if(is_uploaded_file($attachtmp)) {
                       echo "2";
                       if(in_array($attachtype,$ext)) {
                           echo "3";
                           $ruta = move_uploaded_file($attachtmp, "$dir/$attachname");
                           echo ($ruta);
                           //mysql_query("INSERT INTO picture (name) VALUES ('$ruta')");
                       } else {
                           echo "Esto no es una imagen :(";
                           return false;
                       }
                   }
                   //}
                   //}

                   $this->model->afegeixReview($review['title'], $review['description'],$review['subject'], $review['date'], $review['score'], $review['image'], $nom, $login, $dataC);

                    /*Session::getInstance()->set('title', $review['title']);
                    Session::getInstance()->set('description', $review['description']);
                    Session::getInstance()->set('subject', $review['subject']);
                    Session::getInstance()->set('date', $review['date']);
                    Session::getInstance()->set('score', $review['score']);
                    Session::getInstance()->set('image', $review['image']);*/

               }

            }

            $this->setLayout( $this->view );
        }
        else if(isset($info['url_arguments']))
        {
            $this->setLayout($this->view_error404);
        }
        else if($login == 0)
        {
            $this->setLayout($this->view_error403);
        }
    }

    protected function comprovaCamps($review)
    {
        //Guardem totes les reviews de la base de dades per comparar qe els camps que han de ser únics no existeixin a cap altra review
        $reviews = $this->model->getTot('review');

        //Per cada review de la base de dades...
        foreach($reviews as $r)
        {
            //Comprovem que el titol no estigui repetit i tingui menys de 100 caràcters
            if(!strcmp($r['title'], $review['title']) || strlen($review['title']) > 100)
            {
                $this->retornaCamps($review);

                return false;
            }

        }



        return true;
    }

    protected function retornaCamps($review)
    {
        $this->assign('title', $review['title']);
        $this->assign('description', $review['description']);
        $this->assign('subject', $review['subject']);
        $this->assign('date', $review['date']);
        $this->assign('score', $review['score']);
        $this->assign('image', $review['image']);
    }




    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
