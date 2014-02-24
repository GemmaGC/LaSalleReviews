<?php
/**
 * Micos Grans Controller: Controller dels micos grans.
 *
 * Coses a tenir en compte:
 * 	-> El controller fa un "extends Controller"
 * 	-> El controller necessitar� sempre un m�tode "public function build(){...}"
 */
class Exercici1MicosgransController extends Controller
{
    protected $view = 'exercici1/micos.tpl';

    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {
        //Crida a un mètode que mostrarà contingut per pantalla.


        $this->mostraImatge();


        // Caldrà sempre definir una vista per cada controllador. Pot quedar definidar
        // aqui o dins d'un altre mètode cridat a build().
        // El fitxer referenciat es troba a: instances/<la_vostra_instancia>/templates/home/home.tpl
        $this->setLayout($this->view);

    }




    /**
     * Mètode que mostra la imatge del mico per pantalla
     * Aquest m�tode nom�s passar� un valor a la vista si s'envia un valor pel
     * formulari definit a: instances/<la_vostra_instancia>/templates/home/home.tpl.
     */
    protected function mostraImatge()
    {
        // Per capturar una variable enviada mitjan�ant un formulari HTML pels m�todes GET/POST, has de fer servir
        // la class Filter de la seg�ent manera.
        $nom = Filter::getString('nom');

        // Si $nom �s un String, entrar� a l'if. Altrament, $nom ser� fals.
        if($nom) {
            $this->assign('nom_usuari',$nom);
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
        $modules['head']	= 'SharedHeadController';
        $modules['footer']	= 'SharedFooterController';
        return $modules;
    }
}