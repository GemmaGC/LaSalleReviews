<?php

class PracticaRegistreController extends Controller
{
    protected $view = 'practica/formulariRegistre.tpl';
    protected $view_activa = 'practica/activacio.tpl';
    protected $model;
    public function build( )
    {
        $info = $this->getParams();

        if(!isset($info['url_arguments'])){
            $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

            //Carreguem les imatges necessaries
            $this->assign('url_tick', '../imag/tick.gif');
            $this->assign('url_creu', '../imag/creu2.png');
            $this->assign('val', 0);
            if(Filter::getString('submit_button')){

                //Agafem les dades de l'usuari del formulari
                $usuari['nom'] = Filter::getString('newUser');
                $usuari['email'] = Filter::getString("newEmail");
                $usuari['password'] = Filter::getString("newPassword");



                $this->assign('vNom', 0); $this->assign('vMail', 0); $this->assign('vPas', 0);

                //Si tots són correctes afegim l'usuari a la base de dades i redirigim per activar el compte d'usuari
                if (PracticaRegistreController::comprovaCamps($usuari)){
                    $usuari['login'] = PracticaRegistreController::generaLogin();
                    $this->model->afegeixUsuari($usuari['login'], $usuari['nom'],$usuari['email'], $usuari['password']);

                    //Session::getInstance()->set('usuari', $usuari);
                    Session::getInstance()->set('nom', $usuari['nom']);
                    Session::getInstance()->set('email', $usuari['email']);
                    Session::getInstance()->set('password', $usuari['password']);
                    Session::getInstance()->set('login', $usuari['login']);

                    /****** ENVIAR MAIL AMB CODI D'ACTIVACIÓ DE COMPTE *********/



                    //echo $activa;
                    /*$this->assign('val', 1);
                    $activa = PracticaRegistreController::generaUrlActivacio($usuari);
                    $this->assign('codi', $activa);

                    var_dump(Filter::getString('codi_activacio'));

                    if(Filter::getString('codi_activacio')){
                        //header('Location: /register',true,301);
                        echo "HOLA";
                    }*/
                    header('Location: /register/activa',true,301);
                }

            }
            $this->setLayout($this->view);

        }else if(strcmp($info['url_arguments'][1], "activa") != 0){

            $usuari['nom'] = Session::getInstance()->get('nom');
            $usuari['email'] = Session::getInstance()->get('email');
            $usuari['password'] = Session::getInstance()->get('password');
            $usuari['login'] = Session::getInstance()->get('login');

            $activa = PracticaRegistreController::generaUrlActivacio($usuari);
            $this->assign('codi', $activa);

            if(Filter::getString('codi_activacio')){
                $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
                $this->model->activaUsuari($usuari['login']);
                header('Location: /LaSalleReview',true,301);
            }

            $this->setLayout($this->view_activa);
        }else{
            $this->setLayout($this->view_error);
        }
    }

    protected function generaLogin()
    {
        //$this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        $ant = $this->model->getUltim('usuaris');

        if (!empty($ant))
        {
            $login = 'ls'.(string)$ant[0]['id'];

        }else{
            $login = 'ls00000';
        }

        return $login;
    }


    protected function comprovaCamps($usuari)
    {
        $usuaris = $this->model->getTot('usuaris');
        $var = true;

        foreach($usuaris as $u)
        {
            if(!strcmp($u['nom'], $usuari['nom'])) //Comprovem que el nom d'usuari sigui únic
            {
                $this->assign('vNom', 1);
                $this->assign('nom', $usuari['nom']);
                $this->assign('email', $usuari['email']);
                $this->assign('password', $usuari['password']);
                $var = false;
            }

            if(!strcmp($u['email'], $usuari['email'])) //Comprovem que l'email sigui únic
            {
                $this->assign('val', 1);
                $this->assign('vMail', $usuari['nom']);
                $this->assign('email', $usuari['email']);
                $this->assign('password', $usuari['password']);
                $var = false;
            }
        }

        if(strlen($usuari['password']) < 6 || strlen($usuari['password']) > 20 ) //Comprovem que la contrassenya tingui entre 6 i 20 caràcters
        {
            $this->assign('vPas', 1);

            $this->assign('nom', $usuari['nom']);
            $this->assign('email', $usuari['email']);
            $this->assign('password', $usuari['password']);
            $var = false;
        }

        return $var;
    }


    protected function generaUrlActivacio($usuari)
    {
        return md5($usuari['nom'].$usuari['email'].$usuari['login']);
    }


    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
