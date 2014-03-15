<?php
    /**
     * Home Controller de l'exercici 2
     */
    class Exercici2HomeController extends Controller
    {
        protected $view_home = 'exercici2/home.tpl';
        protected $view_head = 'shared/head.tpl';

        /**
         * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
         */
        public function build()
        {
            $info = $this->getParams();
            $mostra_model = $this->getClass( 'Exercici2MostraModel' ); //Importem el model per mostrar imatges


            $css = "/css/style.css";
            $this->setParams( array( 'css' => $css ) );

            $this->assign('titol', 'HOME EXERCICI 2');


            $this->assign('afegir', '/afegeix');
            $this->assign('enr', '/home');

            if(count($mostra_model->getImatges()) != 0){
                $this->assign('mostrar', '/mostra/1');
            }else{
                //Mostra missatge error
                $this->assign('mostrar', '/home');
            }

            $this->setLayout($this->view_home);
        }


        /**
         * With this method you can load other modules that we will need in our page. You will have these modules availables in your template inside the "modules" array (example: {$modules.head}).
         * The sintax is the following:
         * $modules['name_in_the_modules_array_of_Smarty_template'] = Controller_name_to_load;
         *
         * @return array
         */

        public function loadModules() {
            $modules['head']	= 'SharedHeadController';
            $modules['footer']	= 'SharedFooterController';
            return $modules;
        }


    }
?>