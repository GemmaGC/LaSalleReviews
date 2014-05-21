<?php

include 'src/facebook/facebook.php';

class PracticaLoginController extends Controller
{
    protected $view = 'practica/formulariLogin.tpl';
    protected $view_error = 'practica/error/errorP404.tpl';
    protected $view_errorLog = 'practica/duesOpcions.tpl';
    protected $model;

    public function build( )
    {

        $info = $this->getParams();
        $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

        if(sizeof($info['url_arguments']) == 0){

            if(Session::getInstance()->get('header') == 1)
            {
                Session::getInstance()->set('header', 0);

                $this->assign("ok", 0);
                $this->assign("mail", Session::getInstance()->get('mail'));
                $this->assign('error', "Aquest usuari no existeix! Comprova els camps o dona't d'alta ;)");

                $this->setLayout( $this->view );

            }
            else if(Filter::getString('submit_button'))
            {

                $u['email'] = Filter::getString("email");
                $u['password'] = Filter::getString("password");

                $usuari = $this->model->buscaUsuari($u['email'], $u['password']);

                if(!empty($usuari))
                {
                    if($usuari[0]["actiu"] == 1){

                        Session::getInstance()->set('nom', $usuari[0]['nom']); //Només mostrarem el nom
                        Session::getInstance()->set('login', $usuari[0]['login']);
                        Session::getInstance()->set('log', 1);
                        $this->assign("ok", 1);

                        Session::getInstance()->delete('mail');
                        Session::getInstance()->delete('header');

                        header('Location: /LaSalleReview',true,301);


                    }else{
                        $this->assign('title', 'Hey! You have'."'".'nt activated your account yet!');
                        $this->assign('subtitle', 'You can either go to the homepage or resend the activation code');
    //CAL FER EL RESEND BÉ AL TEMPLATE
                        $this->assign('log', 0); $this->assign('send', 1);

                        $this->setLayout($this->view_errorLog);
                    }

                }else{
                    $this->assign("ok", 0);
                    $this->assign('error', "Aquest usuari no existeix! Comprova els camps o dona't d'alta ;)");

                    $this->setLayout( $this->view );

                }
            }else{
                $this->setLayout( $this->view );
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
                    'redirect_uri' => 'http://g1.local/facebook/logIn'
                )));

        }else{
            $this->setLayout( $this->view_error );
        }



    }

    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
