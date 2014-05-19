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

        date_default_timezone_set(date_default_timezone_get());
        $dataC = date('Y.m.d', time());


        if(!isset($info['url_arguments']) && $login > 0){
            $this->assign('ok', true);

            if(Filter::getString('submit_button')){

                //Agafem les dades que posa l'usuari al addreview
                $review['title']        =   Filter::getString('newTitle');
                $review['description']  =   Filter::getString('newDescription');
                $review['subject']      =   Filter::getString('newSubject');
                $review['date']         =   Filter::getString('newDate');
                $review['score']        =   Filter::getInteger('newScore');
                //$review['image']        =   Filter::getString('newImage');
                //echo '<pre>'; var_dumo($review); echo'</pre>';
                //echo $_FILES['newImage']['name'];

                /* $this->assign('vtitle', 0); $this->assign('description', 0);
                $this->assign('subject', 0); $this->assign('date', 0);
                $this->assign('score', 0); $this->assign('vimage', 0); */


                //Si tots els camps del formulari són correctes...
               if ($this->comprovaCamps($review)){

                   /***********************/
                   /*       IMATGE        */
                   /***********************/

                   //Guardem la imatge a la carpeta d'htdocs si tots els camps del formulari són correctes
                   $dir = "imag/img_usuaris/";
                   $attachtmp  = $_FILES['newImage']['tmp_name'];
                   $review['image'] = $_FILES['newImage']['name'];

                   $directori = $dir . $review['image'];
                   move_uploaded_file($attachtmp, $directori);

                   //Guardem la imatge en altres tamanys
                   //$img100 = $this->canviaTamanyImatge($attachtmp, 100, 100);
                   //$img704 = $this->canviaTamanyImatge($attachtmp, 704, 528);

                   /***********************/
                   /*       MODEL         */
                   /***********************/


                   $login = Session::getInstance()->get('login');

                   $this->model->afegeixReview($review['title'], $review['description'],$review['subject'], $review['date'], $review['score'], $review['image'], $nom, $login, $dataC);

                   //Esborrem les variables que ja no necessitem
                   unset($review);

                   //Guardem la id de la review
                   $id = $this->model->getUltim('review');
                   $id = $id[0]['id'];

                   Session::getInstance()->set('id', $id);

                   //Redirigim a la pàgina de la review
                   header('Location: /Review',true,301);
               }else{
                   $this->assign('ok', false);
                   $this->retornaCamps($review);
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

    protected function canviaTamanyImatge($img_original, $Nwidth, $Nheight)
    {
        //Ancho y alto de la imagen original
        list($width, $height)=getimagesize($img_original);

        //Se calcula ancho y alto de la imagen final
        /*$x_ratio = $max_ancho / $ancho;
        $y_ratio = $max_alto / $alto;


        //Si el ancho y el alto de la imagen no superan los maximos,
        //ancho final y alto final son los que tiene actualmente
        if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho
            $ancho_final = $ancho;
            $alto_final = $alto;
        }
        /*
        * si proporcion horizontal*alto mayor que el alto maximo,
        * alto final es alto por la proporcion horizontal
        * es decir, le quitamos al ancho, la misma proporcion que
        * le quitamos al alto
        *
        */
        /*elseif (($x_ratio * $alto) < $max_alto){
            $alto_final = ceil($x_ratio * $alto);
            $ancho_final = $max_ancho;
        }
        /*
        * Igual que antes pero a la inversa
        */
        /*else{
            $ancho_final = ceil($y_ratio * $ancho);
            $alto_final = $max_alto;
        }*/

        $dir = "imag/img_usuaris/";
        $directori = $dir . $Nwidth . '_imatge';
        $tmp = imagecreatetruecolor($Nwidth, $Nheight); //Creem una nova imatge blanca amb el nou tamany
        imagecopyresampled($tmp, $img_original, 0, 0, 0, 0, $Nwidth, $Nheight, $width, $height); //Copiem la imatge original sobre la blanca
var_dump($tmp);
        move_uploaded_file($tmp, $directori);
        imagedestroy($_FILES['newImage']); //Destruim l'arxiu temporal per alliberar memòria

        return $tmp;

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
                echo "El títol no és correcte: o està repetit o és més llarg de 100 caràcters";
                return false;
            }

        }

        //Comprovem la imatge
        $ext = array('image/jpg', 'image/jpeg', 'image/gif', 'image/png'); //Forcem que l'extensió només pugui ser jpg, gif o png
        $attachtmp  = $_FILES['newImage']['tmp_name']; //Arxiu temporal
        $attachtype = $_FILES['newImage']['type'];

        $tamany = filesize($attachtmp); //Tamany de la imatge (en bytes)
        $tMax = 2 * pow(10,6); //El tamany màxim de la imatge és de 2MB
        if(!file_exists($attachtmp) || !is_uploaded_file($attachtmp) || !in_array($attachtype, $ext) || $tamany > $tMax)
        {
            echo "Error al carregar la imatge";
            return false;
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
        $this->assign('image', $_FILES['newImage']['tmp_name']);
    }




    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
