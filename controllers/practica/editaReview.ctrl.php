<?php

class PracticaEditaReviewController extends Controller
{
    protected $view             = 'practica/addReview.tpl';
    protected $view_error404    = 'practica/error/errorP404.tpl';
    protected $view_error403    = 'practica/error/errorP403.tpl';
    protected $model;
    protected $id_review;

    public function build( )
    {
        $canviar_titol = false;


        $info = $this->getParams();
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        $this->assign('val', 0);

        $login = Session::getInstance()->get('log');

        if(sizeof($info['url_arguments']) == 1 && $login > 0){

            //Inicialitzem els camps...
            $this->assign('ok', false);
            $this->id_review = $info['url_arguments'][0];

            $r = $this->model->getReview($this->id_review);

            $this->assign('title', $r[0]['title']);
            $this->assign('description', $r[0]['description']);
            $this->assign('subject', $r[0]['subject']);
            $this->assign('date', $r[0]['date']);
            $this->assign('score', $r[0]['score']);

            Session::getInstance()->set('img', $r[0]['image']);

            //Quan enviin...
            if(Filter::getString('submit_button')){
                //Agafem les dades que posa l'usuari al addreview
                $review['title']        =   Filter::getString('newTitle');
                $review['description']  =   Filter::getString('newDescription');
                $review['subject']      =   Filter::getString('newSubject');
                $review['date']         =   Filter::getString('newDate');
                $review['score']        =   Filter::getInteger('newScore');

                $attachtmp = $_FILES['newImage']['tmp_name'];

                if (!strcmp($attachtmp, 0))
                {
                    $review['image'] = Session::getInstance()->get('img');
                    Session::getInstance()->delete('img');
                }else{
                    $review['image'] = $_FILES['newImage']['name'];
                }

                // Si el titol ha canviat i no es el mateix...
                if ( strcmp( $r[0]['title'], $review['title'] ) != 0 ) {
                    $canviar_titol = true;
                }

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
                    $nomImg = str_replace(' ', '-', $review['image']);
                    $nomImg = ($r[0]['id']) . "_" . $nomImg;


                    //Guardem la imatge en altres tamanys
                    $this->canviaTamanyImatge($attachtmp, 100, 100, $dir, $nomImg); //IMATGE 100x100
                    $this->canviaTamanyImatge($attachtmp, 704, 528, $dir, $nomImg); //IMATGE 704x528

                    /***********************/
                    /*       MODEL         */
                    /***********************/

                    if ($canviar_titol == false ) {
                        $this->model->updateReview($this->id_review, $r[0]['title'], null, $review['description'],$review['subject'], $review['date'], $review['score'], $nomImg);
                    }else{
                        $this->model->updateReview($this->id_review, $review['title'], $review['description'],$review['subject'], $review['date'], $review['score'], $nomImg);
                    }


                    //Eliminem les variables que ja no usarem
                    unset($review);
                    unset($r);
                    Session::getInstance()->delete('id');

                    //Redirigim al llistat de reviews
                    header('Location: /myReviews/0',true,301);
                }

                //Si algun dels camps és incorrecte...
                else{
                    $this->assign('ok', false);
                    $this->retornaCamps($review);
                }

            }

            //Si encara no ha fet submit ens guardem la imatge...
            else{
                $this->assign('img', $r[0]['image']);
                Session::getInstance()->set('img', $r[0]['image']);
            }

            //Carreguem el template
            $this->setLayout( $this->view );
        }

        //Si ha posat una url incorrecta...
        else if(isset($info['url_arguments']))
        {
            $this->setLayout($this->view_error404);
        }

        //Si no està logejat....
        if($login == 0)
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
            if(strcmp($r['id'], $this->id_review) && (!strcmp($r['title'], $review['title']) || strlen($review['title']) > 100))
            {
                echo "El títol no és correcte: o està repetit o és més llarg de 100 caràcters";
                return false;
            }

        }

        //Comprovem la imatge
        $ext = array('image/jpg', 'image/jpeg', 'image/gif', 'image/png'); //Forcem que l'extensió només pugui ser jpg, gif o png
        $attachtmp  = $_FILES['newImage']['tmp_name']; //Arxiu temporal

        if (strcmp($attachtmp, 0))
        {
            $attachtype = $_FILES['newImage']['type'];

            $tamany = filesize($attachtmp); //Tamany de la imatge (en bytes)
            $tMax = 2 * pow(10,6); //El tamany màxim de la imatge és de 2MB
            if(!file_exists($attachtmp) || !is_uploaded_file($attachtmp) || !in_array($attachtype, $ext) || $tamany > $tMax)
            {
                echo "Error al carregar la imatge";
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
        $this->assign('img', $_FILES['newImage']['tmp_name']);

    }


    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }

}