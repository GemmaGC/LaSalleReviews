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
            $this->setLayout($this->view);

        }




        /**
         * M�tode d'exemple: salutacio().
         * Aquest m�tode nom�s passar� un valor a la vista si s'envia un valor pel
         * formulari definit a: instances/<la_vostra_instancia>/templates/home/home.tpl.
         */
        /*protected function salutacio()
        {
            // Per capturar una variable enviada mitjan�ant un formulari HTML pels m�todes GET/POST, has de fer servir
            // la class Filter de la seg�ent manera.
            $nom = Filter::getString('nom');

            // Si $nom �s un String, entrar� a l'if. Altrament, $nom ser� fals.
            if($nom) {
                $this->assign('nom_usuari',$nom);
            }
        }*/






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