<?php

include_once( 'practica/emailActivacio.ctrl.php' );
require_once './src/mailchimp-mandrill-api-php/src/Mandrill.php'; //Not required with Composer

class PracticaRegistreController extends Controller
{
    protected $view = 'practica/formulariRegistre.tpl';
    protected $view_activa = 'practica/activacio.tpl';
    protected $view_error = 'practica/error/errorP404.tpl';
    protected $model;
    protected $mail;
    protected $usuari;

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
                $this->usuari['nom'] = Filter::getString('newUser');
                $this->usuari['login'] = Filter::getString('newLogin');
                $this->usuari['email'] = Filter::getString("newEmail");
                $this->usuari['password'] = Filter::getString("newPassword");

                $this->assign('vNom', 0); $this->assign('vLogin', 0); $this->assign('vMail', 0); $this->assign('vPas', 0);

                //Si tots són correctes afegim l'usuari a la base de dades i redirigim per activar el compte d'usuari
                if (PracticaRegistreController::comprovaCamps($this->usuari)){
                    $this->usuari['url'] = $this::generaUrlActivacio($this->usuari);
                    $this->model->afegeixUsuari($this->usuari['login'], $this->usuari['nom'],$this->usuari['email'], $this->usuari['password'], $this->usuari['url']);


                //CREC QE NO CAL GUARDAR TANTES INSTANCIES, NOMES CALEN NOM I LOGIN
                    Session::getInstance()->set('nom', $this->usuari['nom']);
                    Session::getInstance()->set('login', $this->usuari['login']);
                    Session::getInstance()->set('email', $this->usuari['email']);
                    Session::getInstance()->set('password', $this->usuari['password']);
                //////////////

                    //Enviem el correu amb el codi d'activació del compte
                    $this->generaCorreu();

                    //header('Location: /register/activa',true,301);
                }

            }
            $this->setLayout($this->view);

        }else if(strcmp($info['url_arguments'][1], "activa") != 0){

            //Guardem les instàncies per reomplir els camps al formulari
            $this->usuari['nom'] = Session::getInstance()->get('nom');
            $this->usuari['email'] = Session::getInstance()->get('email');
            $this->usuari['password'] = Session::getInstance()->get('password');
            $this->usuari['login'] = Session::getInstance()->get('login');

            $activa = $this->generaUrlActivacio($this->usuari);
            $this->assign('codi', $activa);

            if(Filter::getString('codi_activacio')){
                $this->model->activaUsuari($this->usuari['login']);

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

    /**
     * @param $usuari
     * @return bool
     */
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

    /**
     * Funció que s'encarrega de controlar que el login és correcte
     * @param $var
     * @return bool
     */
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

    /**
     * Funció que carrega les dades del correu d'activació que s'enviarà a l'usuari i crida a la funció que el genera i l'envia.
     */
    protected function generaCorreu()
    {
        $key = "kvgn5iFAhFg5Ia5q3dOBlA";
        $pag = "g1.local/benvinguda";
        //$url = $this->generaUrlActivacio($this->usuari);
        $url = $this->usuari['url'];
            $titol = '<h1>Hi '. $this->usuari['nom'] . '!</h1>';
            $benvinguda = '<p>Welcome to LaSalleReview, you activate your account by clicking on the link below: </p>';
            $link = '<form method='."post".' action='.$pag.'><input type='."submit".' name='."codi_activacio".' value='.$url.'/></form>';
            $despedida = '<br><br>Enjoy,<br><br><i>Team 1</i> :)';
        //$content = '<h1>Hi '. $this->usuari['nom'] . '!</h1><p>Welcome to LaSalleReview, you activate your account by clicking on the link below: </p><a href = ' . $pag . '>' . $url . '</a><br><br>Enjoy,<br><br><i>Team 1</i> :)';
        $content = $titol . $benvinguda . $link . $despedida;

        $subject = 'Activate account on LaSalleReview';

        $from['email'] = 'g1@lasallereview.com';
        $from['name'] = 'Grup 1 Projectes Web';

        $to['email'] = $this->usuari['email'];
        $to['name'] = $this->usuari['nom'];
        $to['type'] = 'to';

        $this->enviaCorreu($key, $content, $subject, $from, $to);
    }

    /**
     * Funció que s'encarrega de muntar i enviar el correu d'activació del compte gràcies a la API de Mandrill i les dades proporcionades
     * @param $_key         ->  codi de la API de Mandrill
     * @param $_content     ->  contingut del correu
     * @param $_subject     ->  subjecte del correu
     * @param $_from        ->  informació sobre nosaltres
     * @param $_to          ->  informació de l'usuari
     */
    protected function enviaCorreu($_key, $_content, $_subject, $_from, $_to)
    {

        $to = $_to['email'];
        $subject = $_subject;
        $from = $_from['email'];
        $uri = 'https://mandrillapp.com/api/1.0/messages/send.json';
        $api_key = $_key;
        $content_text = strip_tags($_content);

        $postString = '{
            "key": "' . $api_key . '",
            "message": {
                "html": "' . $_content . '",
                "text": "' . $content_text . '",
                "subject": "' . $subject . '",
                "from_email": "' . $from . '",
                "from_name": "' . $from . '",
                "to": [
                    {
                      "email": "' . $to . '",
                      "name": "' . $to . '"
                    }
                ],
                "track_opens": true,
                "track_clicks": true,
                "auto_text": true,
                "url_strip_qs": true,
                "preserve_recipients": true
                },
            "async": false
            }';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $uri);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);

        $result = curl_exec($ch);
        var_dump($result);
    }


    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
