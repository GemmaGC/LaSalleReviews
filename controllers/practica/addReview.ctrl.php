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


                //Si tots els camps del formulari són correctes...
               if ($this->comprovaCamps($review)){

                   /***********************/
                   /*       IMATGE        */
                   /***********************/

                   //Guardem la imatge a la carpeta d'htdocs si tots els camps del formulari són correctes
                   $dir = "imag/img_usuaris/";
                   $attachtmp  = $_FILES['newImage']['tmp_name'];
                   $review['image'] = $_FILES['newImage']['name'];

                   //Creem un nom únic per la imatge i la guardem al directori
                        //Guardem el nom gèneric de la imatge, segons si té un 100_ o un 704_ davant del nom serà d'un o de l'altre tamany
                       $aux = $this->model->getUltim('review');
                       $nomImg = str_replace(' ', '-', $review['image']);
                       $nomImg = ($aux[0]['id']+1) . "_" . $nomImg;

                       //IMATGE 100x100
                       $this->canviaTamanyImatge($attachtmp, 100, 100, $dir, $nomImg);

                       //IMATGE 704x528
                       $this->canviaTamanyImatge($attachtmp, 704, 528, $dir, $nomImg);


                   /***********************/
                   /*       NOVA URL      */
                   /***********************/
                   $url = $review['title'];
                   $url = str_replace(' ', '-', $url);

                   /***********************/
                   /*       MODEL         */
                   /***********************/


                   $login = Session::getInstance()->get('login');


                   $this->model->afegeixReview($review['title'], $review['description'],$review['subject'], $review['date'], $review['score'], $nomImg, $nom, $login, $dataC, $url, null);

                   //Esborrem les variables que ja no necessitem
                   unset($review);

                   //Guardem la id de la review
                   $id = $this->model->getUltim('review');
                   $id = $id[0]['id'];

                   Session::getInstance()->set('id', $id);

                   //Redirigim a la pàgina de la review
                   header('Location: /r/'.$url);
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

    protected function canviaTamanyImatge($img_original, $maxWidth, $maxHeight, $dir, $nomImg)
    {
        $info_imagen = getimagesize($img_original);
        $imagen_ancho = $info_imagen[0];
        $imagen_alto = $info_imagen[1];
        $imagen_tipo = $info_imagen['mime'];

        //Creem una imatge del nou tamany
        $lienzo = imagecreatetruecolor( $maxWidth, $maxHeight );
        switch ( $imagen_tipo ){
            case "image/jpg":
            case "image/jpeg":
                $imagen = imagecreatefromjpeg( $img_original );
                break;
            case "image/png":
                $imagen = imagecreatefrompng( $img_original );
                break;
            case "image/gif":
                $imagen = imagecreatefromgif( $img_original );
                break;
        }

        //Canviem el tamany de la imatge
        imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $maxWidth, $maxHeight, $imagen_ancho, $imagen_alto);

        //Guardem la nova imatge
        imagejpeg( $lienzo, $dir . $maxWidth . "_" . $nomImg, 90 );
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
