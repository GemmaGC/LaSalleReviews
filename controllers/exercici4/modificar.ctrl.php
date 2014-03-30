<?php
/**
 * Modificar Controller de l'exercici 4
 */
class Exercici4ModificarController extends Controller
{
    protected $view_home = 'exercici4/modificar.tpl';
    protected $view_error = 'error/error404.tpl';

    protected $animal;

    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {
        echo $this->animal;
        $info = $this->getParams();

        $css = "/css/style.css";
        $this->setParams( array( 'css' => $css ) );

        echo $info['url_arguments'][0];
        $values = explode( "-", $info['url_arguments'][0] );
        var_dump($values);

        if(count($info['url_arguments']) <= 1){
            $this->assign('titol', 'MODIFICAR EXERCICI 4');
            $this->assign('head', 'Modifica el nom o la URL de la imatge de '.$this->animal);
            $this->assign('nomImg', 'Nou nom de la imatge de  '.$this->animal);
            $this->assign('urlImg', 'Nova URL de la imatge de '.$this->animal);


            $this->assign('afegir', '/editaZoo');
            $this->assign('enr', '/home');

            $this->setLayout($this->view_home);
        }else{
            $this->setLayout($this->view_error);
        }

    }

    protected function carregaTemplate()
    {

        $info = $this->getParams();

        $css = "/css/style.css";
        $this->setParams( array( 'css' => $css ) );

        if(count($info['url_arguments']) < 1){
            $this->assign('titol', 'MODIFICAR EXERCICI 4');
            $this->assign('head', 'Modifica el nom o la URL de la imatge de '.$this->animal);
            $this->assign('nomImg', 'Nou nom de la imatge de  '.$this->animal);
            $this->assign('urlImg', 'Nova URL de la imatge de '.$this->animal);


            $this->assign('afegir', '/editaZoo');
            $this->assign('enr', '/home');

            $this->setLayout($this->view_home);
        }else{
            $this->setLayout($this->view_error);
        }
    }
/*
    protected function modifica()
    {
        $info = Session::getInstance()->get($this->animal);

        $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model

        $nom_img = Filter::getString('newImgName');
        if ($nom_img == null){ $nom_img = $info['nom_img'];}

        $url_img = Filter::getString("newImgURL");
        if ($url_img == null){ $url_img = $info['url_img'];}

        if(Filter::getString('submit_canvis')){
            $model->modificaImatge($info['id'], $nom_img, $url_img, $this->animal);
        }

        Session::getInstance()->delete($this->animal);
    }
*/

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
