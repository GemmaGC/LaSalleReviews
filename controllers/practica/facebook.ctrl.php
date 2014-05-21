<?php

include 'src/facebook/facebook.php';



class PracticaFacebookController extends Controller
{
    protected $view = 'practica/facebook.tpl';
    protected $error = 'practica/error/errorP404.tpl';
    protected $model;
    protected $usuari;

    public function build(){
        $info = $this->getParams();
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        $this->assign('url_creu', '../imag/creu2.png');

        $facebook = new Facebook(array(
            'appId'  => '292309604263355',
            'secret' => '06d50faaafd96c3986a6a8e9d749cf3d',
            'cookie' => true
        ));

        $this->assign(
            'loginFacebookURL',
            $loginUrl = $facebook->getLoginUrl(array(
                'scope'	=> 'email', // Permissions to request from the user
                'redirect_uri' => 'http://g1.local/facebook/hola'
            )));

        // Get User ID
        $user = $facebook->getUser();

        if ($user) {
            try {
                // Proceed knowing you have a logged in user who's authenticated.
                $user_profile = $facebook->api('/me');
            } catch (FacebookApiException $e) {
                error_log($e);
                $user = null;
            }
        }

        //LOG IN AMB FACEBOOK
        if(!strcmp($info['url_arguments'][0],"logIn"))
        {
            Session::getInstance()->set('nom', $user_profile['first_name']);
            Session::getInstance()->set('login', '');
            Session::getInstance()->set('log', 1);
            header('Location: /LaSalleReview',true,301);
        }

        //REGISTRAR-SE AMB FACEBOOK
        else if (!strcmp($info['url_arguments'][0],"register"))
        {
            if (Filter::getString('submit_button'))
            {
                $this->usuari['nom'] = $user_profile['first_name'];
                $this->usuari['email'] = $user_profile['email'];
                $this->usuari['login'] = Filter::getString('login');
                $this->usuari['password'] = Filter::getString('password');
                $this->usuari['url'] = $this->generaUrlActivacio($this->usuari);

                if($this->comprovaCamps($this->usuari))
                {
                    $this->model->afegeixUsuari($this->usuari['login'], $this->usuari['nom'], $this->usuari['email'], $this->usuari['password'], $this->usuari['url']);
                    $this->model->activaUsuari($this->usuari['login']);

                    //Fem el login (guardem les variables de sessió corresponents)
                    Session::getInstance()->set('nom', $this->usuari['nom']);
                    Session::getInstance()->set('login', $this->usuari['login']);
                    Session::getInstance()->set('log', 1);
                    header('Location: /LaSalleReview',true,301);
                }
            }

            $this->setLayout($this->view);
        }else{
            $this->setLayout($this->error);
        }
    }

    protected function comprovaCamps($usuari)
    {
        $usuaris = $this->model->getTot('usuaris');
        $var = true;

        //Iniciem les variables d'smarty a 0
        $this->assign('vLogin', 0);
        $this->assign('vUsed', 0);
        $this->assign('vPas', 0);

        foreach($usuaris as $u)
        {
            if(!strcmp($u['login'], $usuari['login']) ) //Comprovem que el login sigui unic, tingui una llargada de 7, 2 lletres i 2 num
            {
                $this->assign('vUsed', 1);

                $this->assign('login', $usuari['login']);
                $this->assign('password', $usuari['password']);
                $var = false;
            }
        }

        if(strlen($usuari['password']) < 6 || strlen($usuari['password']) > 20 ) //Comprovem que la contrassenya tingui entre 6 i 20 caràcters
        {
            $this->assign('vPas', 1);

            $this->assign('login', $usuari['login']);
            $this->assign('password', $usuari['password']);
            $var = false;
        }

        if (!$this->comprovaLogin($usuari['login'])){

            $this->assign('vLogin', 1);

            $this->assign('login', $usuari['login']);
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