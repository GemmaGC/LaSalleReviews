<?php

class PracticaRegistreController extends Controller
{
    protected $view = 'practica/formulariRegistre.tpl';
    protected $view_activa = 'practica/activacio.tpl';

    public function build( )
    {
        $info = $this->getParams();

        if(!isset($info['url_arguments'])){
            $model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

            if(Filter::getString('submit_button')){

                $usuari['nom'] = Filter::getString('newUser');
                $usuari['email'] = Filter::getString("newEmail");
                $usuari['password'] = Filter::getString("newPassword");

                //Validem els camps
                $usuaris = $model->getTot('usuaris');
                $var = 0;
                $this->assign('vNom', 0);
                $this->assign('vMail', 0);
                $this->assign('vPas', 0);
                $this->assign('url_creu', '../imag/creu.png');

                foreach($usuaris as $u)
                {
                    if(!strcmp($u['nom'], $usuari['nom'])) //Comprovem que el nom d'usuari sigui únic
                    {
                        $this->assign('vNom', 1);
                        $this->assign('nom', $usuari['nom']);
                        $this->assign('email', $usuari['email']);
                        $this->assign('password', $usuari['password']);
                        $var = 1;
                    }

                    if(!strcmp($u['email'], $usuari['email'])) //Comprovem que l'email sigui únic
                    {
                        $this->assign('val', 1);
                        $this->assign('vMail', $usuari['nom']);
                        $this->assign('email', $usuari['email']);
                        $this->assign('password', $usuari['password']);
                        $var = 1;
                    }


                }
                if(strlen($usuari['password']) < 6 || strlen($usuari['password']) > 20 ) //Comprovem que la contrassenya tingui entre 6 i 20 caràcters
                {
                    $this->assign('vPas', 1);

                    $this->assign('nom', $usuari['nom']);
                    $this->assign('email', $usuari['email']);
                    $this->assign('password', $usuari['password']);
                    $var = 1;
                }

                //Si tots són correctes afegim l'usuari a la base de dades i redirigim per activar el compte d'usuari
                if ($var == 0){


                    $login = PracticaRegistreController::generaLogin();
                    $model->afegeixUsuari($login, $usuari['nom'],$usuari['email'], $usuari['password']);

                    Session::getInstance()->set('nom', $usuari['nom']);
                    Session::getInstance()->set('email', $usuari['email']);
                    Session::getInstance()->set('password', $usuari['password']);
                    Session::getInstance()->set('login', $login);

                    header('Location: /register/activa',true,301);
                }

            }

            $this->setLayout($this->view);

        }else if(!strcmp($info['url_arguments'][1], "activa")){

            $link = "/benvinguda";
            $this->assign('link', $link);
            $this->setLayout($this->view_activa);
        }else{
            $this->setLayout($this->view_error);
        }
    }

    public function generaLogin()
    {
        $model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        $ant = $model->getUltim('usuaris');
        //var_dump($ant);
        echo $ant[0]["id"];
        if (!empty($ant))
        {
            //var_dump($ant);
            //$login['id'] = $ant[0]["id"] + 00001;

            $login = 'ls'.(string)$ant[0]['id'];

        }else{
            //$login['id'] = 00000;
            $login = 'ls00000';
        }

        //var_dump($login);
        return $login;
    }


    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
