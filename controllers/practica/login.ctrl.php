<?php

class PracticaLoginController extends Controller
{
    protected $view = 'practica/formulariLogin.tpl';
    protected $view_error = 'practica/error/errorP404.tpl';
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

                                                                                                      //var_dump($usuari[0]["nom"]);
                if(!empty($usuari))
                {
                                                                                                    //var_dump($usuari['actiu']);
                    if(strcmp($usuari['actiu'], "1")){

                        Session::getInstance()->set('nom', $usuari[0]['nom']); //Només mostrarem el nom
                        Session::getInstance()->set('login', $usuari[0]['login']);
                        Session::getInstance()->set('log', 1);
                        $this->assign("ok", 1);
                        header('Location: /LaSalleReview',true,301);

                    }else{
                        $this->assign("ok", 0);
                        $this->assign('error', "Ei! Encara no t'has donat d'alta! Fes click aquí per tornar a rebre el link d'activació");

                                                                                                    //echo "Ei! Encara no t'has donat d'alta! Fes click aquí per tornar a rebre el link d'activació";
                    }

                }else{
                    $this->assign("ok", 0);
                    $this->assign('error', "Aquest usuari no existeix! Comprova els camps o dona't d'alta ;)");
                                                                                                    //echo "Aquest usuari no existeix! Comprova els camps o dona't d'alta ;)";
                }
            }

            $this->setLayout( $this->view );
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
