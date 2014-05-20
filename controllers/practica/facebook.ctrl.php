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

        var_dump($user_profile);

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

                if (strlen($this->usuari['password']) >= 6 && strlen($this->usuari['password']) <= 20 ){

                    if($this->comprovaLogin($this->usuari['login'])) {

                        $this->model->afegeixUsuari($this->usuari['login'], $this->usuari['nom'], $this->usuari['email'], $this->usuari['password'], $this->usuari['url']);
                        $this->model->activaUsuari($this->usuari['login']);

                        //Fem el login (guardem les variables de sessió corresponents)
                        Session::getInstance()->set('nom', $this->usuari['nom']);
                        Session::getInstance()->set('login', $this->usuari['login']);
                        Session::getInstance()->set('log', 1);
                        header('Location: /LaSalleReview',true,301);

                    }else{

                        $this->assign('login', $this->usuari['login']);
                        $this->assign('password', $this->usuari['password']);
                        $this->assign('vLogin', 1);
                    }
                }else{
                    $this->assign('login', $this->usuari['login']);
                    $this->assign('password', $this->usuari['password']);
                    $this->assign('vPassword', 1);
                }
            }

            $this->setLayout($this->view);
        }else{
            $this->setLayout($this->error);
        }
    }


    /**
     * Funció que s'encarrega de controlar que el login és correcte
     * @param $var
     * @return bool
     */
    protected function comprovaLogin($var)
    {
        $num = 0;
        for ($i = 2; $i<strlen($var); $i++)
        {
            for ($j = 0; $j<10; $j++)
            {
                if(!strcmp($var[$i], $j))
                {
                    $num++;
                }
            }
        }
        if ($num === 5 && $var[0] === 'l' && $var[1] === 's')
        {
            return true;
        }else{
            return false;
        }
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