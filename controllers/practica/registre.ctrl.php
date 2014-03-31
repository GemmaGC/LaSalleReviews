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
                Session::getInstance()->set('nom', $usuari['nom']);

                $usuari['email'] = Filter::getString("newEmail");
                Session::getInstance()->set('email', $usuari['email']);

                $usuari['password'] = Filter::getString("newPassword");
                Session::getInstance()->set('password', $usuari['password']);

                //Validem els camps
                $usuaris = $model->getTot('usuaris');
                $var = 0;
                foreach($usuaris as $u)
                {
                    if(!strcmp($u['nom'], $usuari['nom'])  || !strcmp($u['email'], $usuari['email']) || !strcmp($u['password'], $usuari['password']))
                    {
                        $var = 1;
                        echo "Hi ha algun camp incorrecte.";
                        break;
                    }
                }
                //Si tots són correctes afegim l'usuari a la base de dades i redirigim per activar el compte d'usuari
                if ($var == 0){
                    echo 1;
                    $usuari['login'] = PracticaRegistreController::generaLogin();
                    echo 2;
                    //$usuari['login'] = "ls00000";
                    $model->afegeixUsuari($usuari['login'], $usuari['nom'],$usuari['email'], $usuari['password']);
                    header('Location: /register/activa',true,301);
                }

            }

            $this->setLayout($this->view);

        }else if(strcmp($info['url_arguments'][1], "activa")){

            $link = "/benvinguda";
            $this->assign('link', $link);
            $this->setLayout($this->view_activa);
        }else{
            $this->setLayout($this->view_error);
        }
    }

    public function generaLogin()
    {
        echo "login";
        $model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        $ant = $model->getUltim('usuaris');
        if (!empty($ant))
        {
            $login = 'ls'.$ant['id'];

        }else{
            $login = 'ls00000';
        }

        return $login;
    }


    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
