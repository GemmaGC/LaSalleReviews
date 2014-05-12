<?php

include_once( PATH_CONTROLLERS . 'practica/dosOpcions.ctrl.php' );

class PracticaBenvingudaController extends PracticaDosOpcionsController
{
    protected $title;
    protected $subtitle;

    public function carregaTitols()
    {

        $nom = $this::dadesUsuari();

        $this->title = "WELCOME TO LA SALLE REVIEW ".$nom."!";
        $this->subtitle = "Now that you have successfully registered, you can either go to the Home page";


    }


    protected function dadesUsuari()
    {
        $model = $this->getClass( 'PracticaReviewModel' );

        //Busquem l'usuari que correspon a la url d'activació del compte
        $url = Filter::getString('codi_activacio');
        $usuari = $model->buscaFromUrl($url);

        //Activem l'usuari
        $model->activaUsuari($usuari[0]['login']);

        //Fem el login (guardem les variables de sessió corresponents)
        Session::getInstance()->set('nom', $usuari[0]['nom']);
        Session::getInstance()->set('login', $usuari[0]['login']);
        Session::getInstance()->set('log', 1);

        return $usuari[0]['nom'];

    }
}
