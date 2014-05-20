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
        // Inicialitzem a false que haguem de canviar el titol al principi de tot..
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
                $nou_titol              =   Filter::getString('newTitle');
                $review['description']  =   Filter::getString('newDescription');
                $review['subject']      =   Filter::getString('newSubject');
                $review['date']         =   Filter::getString('newDate');
                $review['score']        =   Filter::getInteger('newScore');

                $attachtmp = $_FILES['newImage']['tmp_name'];

                if (!strcmp($attachtmp, 0))
                {
                    $review['image'] = Session::getInstance()->get('img');
                    var_dump($review['image']);
                    Session::getInstance()->delete('img');
                }else{
                    $review['image'] = $_FILES['newImage']['name'];
                }

                // ---------------------------------------------------------------------

                // Si el titol ha canviat i no es el mateix...
                if ( strcmp( $review['description'], $nou_titol ) != 0 ) {
                    $canviar_titol = true;
                }

                // ---------------------------------------------------------------------

                var_dump($review['image']);
                //Si tots els camps del formulari són correctes...
                if ($this->comprovaCamps($review)){
                    /***********************/
                    /*       IMATGE        */
                    /***********************/

                    if ($attachtmp)
                    {
                        //Guardem la imatge a la carpeta d'htdocs si tots els camps del formulari són correctes
                        $dir = "imag/img_usuaris/";
                        $attachtmp  = $_FILES['newImage']['tmp_name'];

                        $directori = $dir . $review['image'];
                        move_uploaded_file($attachtmp, $directori);
                    }

                    //Guardem la imatge en altres tamanys
                    //$img100 = $this->canviaTamanyImatge($attachtmp, 100, 100);
                    //$img704 = $this->canviaTamanyImatge($attachtmp, 704, 528);

                    /***********************/
                    /*       MODEL         */
                    /***********************/

                    if ($canviar_titol == false ) {
                        $this->model->updateReview($this->id_review, $review['title'], $review['description'],$review['subject'], $review['date'], $review['score'], $review['image'], null);
                    }else{
                        $this->model->updateReview($this->id_review, $r[0]['title'], $review['description'],$review['subject'], $review['date'], $review['score'], $review['image'], $nou_titol);
                    }


                    //Eliminem les variables que ja no usarem
                    unset($review);
                    unset($r);
                    Session::getInstance()->delete('id');

                    //Redirigim al llistat de reviews
                    header('Location: /myReviews/0',true,301);
                }else{
                    $this->assign('ok', false);
                    $this->retornaCamps($review);
                }

            }else{
                var_dump($r[0]['image']);
                $this->assign('img', $r[0]['image']);
                Session::getInstance()->set('img', $r[0]['image']);
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