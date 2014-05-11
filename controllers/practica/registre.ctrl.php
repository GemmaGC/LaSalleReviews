<?php

class PracticaRegistreController extends Controller
{
    protected $view = 'practica/formulariRegistre.tpl';
    protected $view_activa = 'practica/activacio.tpl';
    protected $view_error = 'practica/error/errorP404.tpl';
    protected $model;
    protected $mail;

    public function build( )
    {
        $info = $this->getParams();
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        if(!isset($info['url_arguments'])){


            //Carreguem les imatges necessaries
            $this->assign('url_tick', '../imag/tick.gif');
            $this->assign('url_creu', '../imag/creu2.png');
            $this->assign('val', 0);
            if(Filter::getString('submit_button')){

                //Agafem les dades de l'usuari del formulari
                $usuari['nom'] = Filter::getString('newUser');
                $usuari['login'] = Filter::getString('newLogin');
                $usuari['email'] = Filter::getString("newEmail");
                $usuari['password'] = Filter::getString("newPassword");



                $this->assign('vNom', 0); $this->assign('vLogin', 0); $this->assign('vMail', 0); $this->assign('vPas', 0);

                //Si tots són correctes afegim l'usuari a la base de dades i redirigim per activar el compte d'usuari
                if (PracticaRegistreController::comprovaCamps($usuari)){
                    $this->model->afegeixUsuari($usuari['login'], $usuari['nom'],$usuari['email'], $usuari['password']);

                    Session::getInstance()->set('nom', $usuari['nom']);
                    Session::getInstance()->set('login', $usuari['login']);
                    Session::getInstance()->set('email', $usuari['email']);
                    Session::getInstance()->set('password', $usuari['password']);


                    /****** ENVIAR MAIL AMB CODI D'ACTIVACIÓ DE COMPTE *********/

                    $this->mail = new PracticaEmailActivacioController();
echo "FET";
                    //header('Location: /register/activa',true,301);
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
                $this->model->activaUsuari($usuari['login']);
                Session::getInstance()->delete('nom');
                Session::getInstance()->delete('email');
                Session::getInstance()->delete('login');
                Session::getInstance()->delete('password');
                header('Location: /benvinguda',true,301);
            }

            $this->setLayout($this->view_activa);
        }else{
            $this->setLayout($this->view_error);
        }
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
                $this->assign('login', $usuari['login']);
                $this->assign('email', $usuari['email']);
                $this->assign('password', $usuari['password']);
                $var = false;
            }

            if(!strcmp($u['login'], $usuari['login']) || PracticaRegistrecontroller::comprovaLogin($u['login'])) //Comprovem que el login sigui unic, tingui una llargada de 7, 2 lletres i 2 num
            {

                $this->assign('vLogin', 1);

                $this->assign('nom', $usuari['nom']);
                $this->assign('login', $usuari['login']);
                $this->assign('email', $usuari['email']);
                $this->assign('password', $usuari['password']);
                $var = false;
            }

            if(!strcmp($u['email'], $usuari['email'])) //Comprovem que l'email sigui únic
            {
                $this->assign('vMail', 1);

                $this->assign('nom', $usuari['nom']);
                $this->assign('login', $usuari['login']);
                $this->assign('email', $usuari['email']);
                $this->assign('password', $usuari['password']);
                $var = false;
            }
        }

        if(strlen($usuari['password']) < 6 || strlen($usuari['password']) > 20 ) //Comprovem que la contrassenya tingui entre 6 i 20 caràcters
        {
            $this->assign('vPas', 1);

            $this->assign('nom', $usuari['nom']);
            $this->assign('login', $usuari['login']);
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

    protected function comprovaLogin($var)
    {
        $ok = 0;
        for ($i = 2; $i<sizeof($var); $i++)
        {
            for ($j = 0; $j<10; $j++)
            {
                if($var[$i] === $j)
                {
                    $ok++;
                }
            }
        }
        if ($ok === 5 && $var[0] === 'l' && $var[1] === 's')
        {
            return true;
        }else{
            return false;
        }
    }


    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
