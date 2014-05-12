<?php

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

        if(!isset($info['url_arguments'])){
            if(Filter::getString('submit_button')){

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

                        header('Location: /LaSalleReview',true,301);


                    }else{

                        //$this->assign("ok", 0);
                        //$this->assign('error', "Ei! Encara no t'has donat d'alta! Fes click aquí per tornar a rebre el link d'activació");

                        $this->assign('title', 'Hey! You have'."'".'nt activated your account yet!');
                        $this->assign('subtitle', 'You can either go to the homepage or resend the activation code');
                        $this->assign('log', 0); $this->assign('send', 1);

                        $this->setLayout($this->view_errorLog);
                    }

                }else{
                    $this->assign("ok", 0);
                    $this->assign('error', "Aquest usuari no existeix! Comprova els camps o dona't d'alta ;)");

                    $this->setLayout( $this->view );

                }
                //$this->setLayout( $this->view );
            }else{
                $this->setLayout( $this->view );
            }

        }else{
            $this->setLayout( $this->view_error );
        }

        //$this->setLayout( $this->view );


    }

    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
