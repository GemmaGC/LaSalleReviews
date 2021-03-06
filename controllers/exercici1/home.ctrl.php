<?php
    /**
     * Home Controller: Controller d'exemple.
     *
     * Coses a tenir en compte:
     * 	-> El controller fa un "extends Controller"
     * 	-> El controller necessitar� sempre un m�tode "public function build(){...}"
     */
    class Exercici1HomeController extends Controller
    {
        protected $view = 'exercici1/home.tpl';

        /**
         * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
         */
        public function build()
        {

            $css = "/css/style.css";
            $this->setParams( array( 'css' => $css ) );

            $this->assign('titol', 'EXERCICI 1');
            $this->assign('benv', "BENVINGUT A L'EXERCICI 1!");
            $this->assign('exp', "Veuras uns micos maquíssims!");
            $this->assign('micos', '/micos/1');
            $this->assign('enr', '/home');

            $this->setLayout($this->view);

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