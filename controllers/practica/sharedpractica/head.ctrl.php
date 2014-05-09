<?php

class SharedpracticaHeadController extends Controller
{
    protected $model;
    protected $tpl_login = 'practica/formulariLogin.tpl';

	public function build( )
	{
        $log = Session::getInstance()->get('log');
        $this->assign('log', $log);

        $nom = Session::getInstance()->get('nom');
        $this->assign('nom', $nom);

        $login = Session::getInstance()->get('login');
        $this->assign('login', $login);

        if (is_null($log))
        {
            //echo "hola";

            if(Filter::getString('submitButton'))
            {
                //echo "adeu";
                $this->model = $this->getClass( 'PracticaReviewModel' ); //Importem el model

                $u['email'] = Filter::getString("Email");
                $u['password'] = Filter::getString("Password");
                //echo '<pre>'; var_dump($u); echo "</pre>";
                $usuari = $this->model->buscaUsuari($u['email'], $u['password']);
                var_dump($usuari);
                if(!empty($usuari) && strcmp($usuari['actiu'], "1"))
                {
                    Session::getInstance()->set('nom', $usuari[0]['nom']); //Només mostrarem el nom
                    Session::getInstance()->set('login', $usuari[0]['login']);
                    Session::getInstance()->set('log', 1);
                    //$this->assign("ok", 1);
                    //header('Location: /LaSalleReview',true,301);

                }else{
                    echo "error";
                    //$this->assign("ok", 0);
                    //header('Location: /logIn',true,301);
                    $this->setLayout($this->tpl_login);
                }
            }

        }
        $this->setLayout( 'practica/shared/head.tpl' );
		//$this->setLayout( 'practica/shared/head.tpl' );
	}
}


?>
