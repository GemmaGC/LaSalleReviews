<?php

include_once( PATH_CONTROLLERS . 'practica/dosOpcions.ctrl.php' );

class PracticaBenvingudaController extends PracticaDosOpcionsController
{
    protected $title;
    protected $subtitle;

    public function carregaTitols()
    {

        $model = $this->getClass( 'PracticaReviewModel' );

        //Busquem l'usuari que correspon a la url d'activació del compte
        $url = Filter::getString('codi_activacio');
        $usuari = $model->buscaFromUrl($url);

        if($usuari[0]['actiu'] == 0)
        {
            //Activem l'usuari
            $model->activaUsuari($usuari[0]['login']);

            //Fem el login (guardem les variables de sessió corresponents)
            Session::getInstance()->set('nom', $usuari[0]['nom']);
            Session::getInstance()->set('login', $usuari[0]['login']);
            Session::getInstance()->set('log', 1);

            $this->title = "WELCOME TO LA SALLE REVIEW ".$usuari[0]['nom']."!";
            $this->subtitle = "Now that you have successfully registered, you can either go to the Home page";
        }else{
            $this->title = $usuari[0]['nom'].", you"."'"."ve already activated your account!";
            $this->subtitle = "You can either go to the Home page or Log in";
            Session::getInstance()->set('log', 0);
        }

    }

}
