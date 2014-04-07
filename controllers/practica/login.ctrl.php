<?php

class PracticaLoginController extends Controller
{
    protected $view = 'practica/formulariLogin.tpl';
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

                                                                                                    //var_dump($usuari);
                if(!empty($usuari))
                {
                                                                                                    //var_dump($usuari['actiu']);
                    if(strcmp($usuari['actiu'], '1')){
                                                                                                    //echo "activissim!";

                        Session::getInstance()->set('nom', $usuari['nom']); //Només mostrarem el nom
                        Session::getInstance()->set('login', $usuari['login']);
                        //Session::getInstance()->set('email', $usuari['email']);
                        //Session::getInstance()->set('password', $usuari['password']);
                        Session::getInstance()->set('log', 1);

                        header('Location: /LaSalleReview',true,301);

                    }else{
                                                                                                    echo "Ei! Encara no t'has donat d'alta! Fes click aquí per tornar a rebre el link d'activació";
                    }
                }else{
                                                                                                    echo "Aquest usuari no existeix! Comprova els camps o dona't d'alta ;)";
                }
            }

            $this->setLayout( $this->view );
        }


    }

    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';
        return $modules;
    }
}
