<?php

require_once './src/mailchimp-mandrill-api-php/src/Mandrill.php'; //Not required with Composer

class PracticaEmailActivacioController extends Controller
{
    protected $key;         //API key del mandrill
    protected $html;        //Contingut html del mail
    protected $text;        //Text del mail
    protected $subject;     //Tema del mail
    protected $from;        //email i nom nostre
    protected $to;          //email i nom del destinatari
    protected $usuari;      //Nom de l'usuari (ens ho passen)

    public function build()
    {
        $this->usuari['name'] = "Claudia";
        $this->usuari['email'] = "cldauden@gmail.com";

        $this->key = 'kvgn5iFAhFg5Ia5q3dOBlA';
        $this->content = '<h1>Hola '. $this->usuari['name'] . '!</h1><br><p>Benvingut a LaSalleReview, per activar el teu compte fes click al link següent:</p>';
        $this->subject = 'Activació compte LaSalleReview';
        $this->from['email'] = 'g1@lasallereview.com';
        $this->from['name'] = 'Grup 1 Projectes Web';
        $this->to['email'] = $this->usuari['email'];
        $this->to['name'] = $this->usuari['name'];
        $this->to['type'] = 'to';

        $this->generaCorreu();
    }

    protected function generaCorreu()
    {
        $to = $this->to['email'];
        $content = $this->content;
        $subject = $this->subject;
        $from = $this->from['email'];
        $uri = 'https://mandrillapp.com/api/1.0/messages/send.json';
        $api_key = $this->key;
        $content_text = strip_tags($content);

        $postString = '{
            "key": "' . $api_key . '",
            "message": {
                "html": "' . $content . '",
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