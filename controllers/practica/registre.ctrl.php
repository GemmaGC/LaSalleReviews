<?php

require_once './src/mailchimp-mandrill-api-php/src/Mandrill.php'; //Not required with Composer
include_once( PATH_CONTROLLERS . 'practica/classesAuxiliars/mail.aux.php' );
include 'src/facebook/facebook.php';

class PracticaRegistreController extends Controller
{
    protected $view = 'practica/formulariRegistre.tpl';
    protected $view_activa = 'practica/activacio.tpl';
    protected $view_error404 = 'practica/error/errorP404.tpl';
    protected $view_errorLog = 'practica/duesOpcions.tpl';

    protected $model;
    protected $usuari;

    protected $mail;

    public function build( )
    {
        $info = $this->getParams();
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        if(!isset($info['url_arguments']) && Session::getInstance()->get('log') != '1'){


            //Carreguem les imatges necessaries
            $this->assign('url_tick', '../imag/tick.gif');
            $this->assign('url_creu', '../imag/creu2.png');
            $this->assign('val', 0);

            if(Filter::getString('submit_button')){

                //Agafem les dades de l'usuari del formulari
                $this->usuari['nom'] = Filter::getString('newUser');
                $this->usuari['login'] = Filter::getString('newLogin');
                $this->usuari['email'] = Filter::getString("newEmail");
                $this->usuari['password'] = Filter::getString("newPassword");

                $this->assign('vNom', 0); $this->assign('vLogin', 0); $this->assign('vMail', 0); $this->assign('vPas', 0);

                //Si tots són correctes afegim l'usuari a la base de dades i redirigim per activar el compte d'usuari
                if (PracticaRegistreController::comprovaCamps($this->usuari))
                {
                    $this->usuari['url'] = $this::generaUrlActivacio($this->usuari);
                    $this->model->afegeixUsuari($this->usuari['login'], $this->usuari['nom'],$this->usuari['email'], $this->usuari['password'], $this->usuari['url']);

                    //Enviem el correu amb el codi d'activació del compte
                    $mail = new PracticaMailAuxiliar();
                    $mail->build($this->usuari);
                    $mail->generaCorreu($this->usuari);

                    $this->assign('title', 'Hi '.$this->usuari['nom'].'! ');
                    $this->assign('subtitle', 'We have just sent you an email with the activation code.<br>You can go to the home-page or resend the activation code if you don'."'".'t receive it');
                    $this->assign('log', 0); $this->assign('send', 1);
                    $this->setLayout($this->view_errorLog);

                }else{
                    $this->setLayout($this->view);
                }

                unset($this->usuari);
            }else{
                $this->setLayout($this->view);
            }

        }else if (Session::getInstance()->get('log') == '1'){
            $this->assign('title', 'Hey! You have already logged in!');
            $this->assign('subtitle', 'You can go to the menu by clicking below');
            $this->assign('log', 1);
            $this->setLayout($this->view_errorLog);

        }else{
            $this->setLayout($this->view_error404);
        }

        //Facebook
        $facebook = new Facebook(array(
            'appId'  => '292309604263355',
            'secret' => '06d50faaafd96c3986a6a8e9d749cf3d',
            'cookie' => true
        ));

        $this->assign(
            'loginFacebookURL',
            $loginUrl = $facebook->getLoginUrl(array(
                'scope'	=> 'email', // Permissions to request from the user
                'redirect_uri' => 'http://g1.local/facebook/register'
            )));
    }

    /**
     * @param $usuari
     * @return bool
     */
    protected function comprovaCamps($usuari)
    {
        $usuaris = $this->model->getTot('usuaris');
        $var = true;

        //Iniciem les variables d'smarty a 0
        $this->assign('vNom', 0);
        $this->assign('vLogin', 0);
        $this->assign('vUsed', 0);
        $this->assign('vMail', 0);
        $this->assign('vPas', 0);

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

            if(!strcmp($u['login'], $usuari['login']) ) //Comprovem que el login sigui unic, tingui una llargada de 7, 2 lletres i 2 num
            {
                $this->assign('vUsed', 1);

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

        if (!$this->comprovaLogin($usuari['login'])){

            $this->assign('vLogin', 1);

            $this->assign('nom', $usuari['nom']);
            $this->assign('login', $usuari['login']);
            $this->assign('email', $usuari['email']);
            $this->assign('password', $usuari['password']);
            $var = false;
        }
        return $var;
    }

    /**
     * Funció que s'encarrega de controlar que el login és correcte
     * @param $var
     * @return bool
     */
    protected function comprovaLogin($var)
    {
        $ok = 0;

        if (strlen($var) == 7){
            for ($i = 2; $i < strlen($var); $i++)
            {
                for ($j = 0; $j < 10; $j++)
                {
                    if($var[$i] == $j)
                    {
                        $ok++;
                    }
                }
            }

            if ($ok === 5 && $var[0] === 'l' && $var[1] === 's')
            {
                return true;

            }else return false;

        }else return false;
    }

    /**
     * Funció que genera la url d'activació de l'usuari i comprova que no s'hagi utilitzat encara
     * @param $usuari
     * @return string
     */
    protected function generaUrlActivacio($usuari)
    {
        $url = md5($usuari['nom'].$usuari['email'].$usuari['login']);

        return $url;
    }

    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
