<?php
/**
 * Home Controller: Controller d'exemple.
 *
 * Coses a tenir en compte:
 * 	-> El controller fa un "extends Controller"
 * 	-> El controller necessitar� sempre un m�tode "public function build(){...}"
 */
class PracticaHomeController extends Controller
{
    protected $view = 'practica/home.tpl';
    protected $model;
    protected $view_error = 'practica/error/errorP404.tpl';
    protected $login = 'practica/formulariLogin.tpl';


    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {
        $info = $this->getParams();
        if(sizeof($info['url_arguments']) == 0){
            $log = Session::getInstance()->get('log');

            if(!isset($log)) Session::getInstance()->set('log', 0);

            if ($log == 0)
            {
                if(Filter::getString('submitButton'))
                {
                    $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

                    $u['email'] = Filter::getString("Email");
                    $u['password'] = Filter::getString("Password");

                    $usuari = $this->model->buscaUsuari($u['email'], $u['password']);

                    Session::getInstance()->set('mail', $u['email']);
                    Session::getInstance()->set('header', 1);

                    $u['email'] = Session::getInstance()->get('mail');
                    $usuari = $this->model->buscaUsuariMail($u['email']);

                    if($usuari[0]["actiu"] == 0){
                        Session::getInstance()->set('actiu', 0);
                        header('Location: /logIn',true,301);
                        $this->setLayout($this->login);
                    }else{

                        if(!empty($usuari) && strcmp($usuari['actiu'], "1"))
                        {
                            Session::getInstance()->set('nom', $usuari[0]['nom']); //Només mostrarem el nom
                            Session::getInstance()->set('login', $usuari[0]['login']);
                            Session::getInstance()->set('log', 1);
                            $this->setLayout($this->view);

                        }else{
                            header('Location: /logIn',true,301);
                        }
                    }
                }else{
                    $this->setLayout($this->view);
                }
            }else{

                $this->setLayout($this->view);
            }

        }else{
            $this->setLayout( $this->view_error );
        }
    }


    /**
     * With this method you can load other modules that we will need in our page. You will have these modules availables in your template inside the "modules" array (example: {$modules.head}).
     * The sintax is the following:
     * $modules['name_in_the_modules_array_of_Smarty_template'] = Controller_name_to_load;
     *
     * @return array
     */


    public function loadModules() {

        $modules['headPractica']	= 'SharedpracticaHeadController';
        $modules['footerPractica']	= 'SharedpracticaFooterController';

        // Moduls de la home especials
        $modules['twitter']	        = 'PracticaTwitterController';
        $modules['bestReview']	    = 'PracticaBestReviewController';
        $modules['llistatReviews']	= 'PracticaLlistatReviewsController';
        $modules['llistatImatges']	= 'PracticaLlistatImatgesController';
        $modules['llistatBestReviewsPuntuacio']	    = 'PracticaLlistatBestReviewsPuntuacioController';

        return $modules;
    }


}
