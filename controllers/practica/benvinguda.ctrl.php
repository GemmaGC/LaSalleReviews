<?php

include_once( PATH_CONTROLLERS . 'practica/dosOpcions.ctrl.php' );

class PracticaBenvingudaController extends PracticaDosOpcionsController
{
    protected $title;
    protected $subtitle;

    public function carregaTitols()
    {
        $this->title = "WELCOME TO LA SALLE REVIEW!";
        $this->subtitle = "Now that you have successfully registered, you can either go to the Home page or Log In.";

        $usuari = $this::dadesUsuari();
        var_dump($usuari);

    }


    protected function dadesUsuari()
    {
        return Filter::getString('codi_activacio');
    }
}
