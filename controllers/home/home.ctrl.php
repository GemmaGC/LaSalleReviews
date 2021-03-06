<?php
    /**
     * Home Controller: Controller d'exemple.
     *
     * Coses a tenir en compte:
     * 	-> El controller fa un "extends Controller"
     * 	-> El controller necessitar� sempre un m�tode "public function build(){...}"
     */
    class HomeHomeController extends Controller
    {
        protected $view = 'home/home.tpl';

        /**
         * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
         */
        public function build()
        {
            /*$info = $this->getParams();
            echo '<pre>';print_r( $info );echo '</pre>';*/

            // Caldrà sempre definir una vista per cada controllador. Pot quedar definidar
            // aqui o dins d'un altre mètode cridat a build().
            // El fitxer referenciat es troba a: instances/<la_vostra_instancia>/templates/home/home.tpl

            $css = "/css/style.css";
            $this->setParams( array( 'css' => $css ) );

            $this->setLayout($this->view);

        }

        public function loadModules() {
            $modules['head']	= 'SharedHeadController';
            $modules['footer']	= 'SharedFooterController';
            return $modules;
        }
    }
?>