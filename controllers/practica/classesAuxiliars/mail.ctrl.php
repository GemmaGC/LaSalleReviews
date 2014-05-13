<?php

include_once( PATH_CONTROLLERS . 'practica/registre.ctrl.php' );

//class PracticaMailController extends PracticaRegistreController
class PracticaMailController
{
    protected $usuari;
    protected $mail;
    //protected $view = 'practica/duesOpcions.tpl';

    public function build($_usuari)
    {
        $this->usuari = $_usuari;

        $this->generaCorreu();

        /*$this->assign('title', 'Hey! The email has been sent!');
        $this->assign('subtitle', 'You can go to the home-page or resend the activation code if you don'."'".'t receive it');
        $this->assign('log', 0); $this->assign('send', 1);

        $this->setLayout($this->view);*/
    }


    /**
     * Funció que carrega les dades del correu d'activació que s'enviarà a l'usuari i crida a la funció que el genera i l'envia.
     */
    public function generaCorreu()
    {
        $key = "kvgn5iFAhFg5Ia5q3dOBlA";
        $pag = "g1.local/benvinguda";
        $url = $this->usuari['url'];
        $titol = '<h1>Hi '. $this->usuari['nom'] . '!</h1>';
        $benvinguda = '<p>Welcome to LaSalleReview, in order to activate your account click on the link below: </p>';
        $link = '<form method='."post".' action='.$pag.'><input type='."submit".' name='."codi_activacio".' value='.$url.' /></form>';
        $despedida = '<br><br>Enjoy,<br><br><i>Team 1</i> :)';
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
    }


}