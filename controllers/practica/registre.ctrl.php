<?php

class PracticaRegistreController extends Controller
{
    protected $view = 'practica/formulariRegistre.tpl';
    protected $view_activa = 'practica/activacio.tpl';

    public function build( )
    {
        $info = $this->getParams();

        if(count($info['url_arguments']) < 1){
            $model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

            $usuari['nom'] = Filter::getString('newUser');
            Session::getInstance()->set('nom', $usuari['nom']);

            $usuari['email'] = Filter::getString("newEmail");
            Session::getInstance()->set('email', $usuari['email']);

            $usuari['password'] = Filter::getString("newPassword");
            Session::getInstance()->set('password', $usuari['password']);


            if(Filter::getString('submit_button')){
                //Validem els camps
                $usuaris = $model->getTot('usuaris');
                $var = 0;
                foreach($usuaris as $u)
                {
                    if(strcmp($u['nom'], $usuari['nom']) || strcmp($u['email'], $usuari['email']) || strcmp($u['password'], $usuari['password'])){
                        $var = 1;
                        echo "Hi ha algun camp incorrecte.";
                        break;
                    }
                }
                //Si tots són correctes afegim l'usuari a la base de dades i redirigim per activar el compte d'usuari
                if ($var == 0){
                    $usuari['login'] = generaLogin();
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
        $model = $this->getClass( 'PracticaReviewModel' ); //Importem el model
        $tots = $model->getTots('usuaris');
        $u = count($tots);
        if ($u > 0)
        {
            $num = $tots[$u-1]['login'];
        }else{
            $num = 00000;
        }
        $login = "ls".$num;
        return $login;
    }


    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
