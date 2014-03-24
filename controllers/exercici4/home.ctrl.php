<?php
/**
 * Home Controller de l'exercici 4
 */
class Exercici4HomeController extends Controller
{
    protected $view_home = 'exercici4/home.tpl';
    protected $view_error = 'error/error404.tpl';

    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {
        $info = $this->getParams();


        if(count($info['url_arguments']) < 1){
            $this->assign('titol', 'HOME EXERCICI 4');
            $this->assign('afegir', '/editaZoo');
            $this->assign('enr', '/home');

            $css = "/css/style.css";
            $this->setParams( array( 'css' => $css ) );

            $model = $this->getClass( 'Exercici3GestorModel' ); //Importem el model

            //Numero de micos, marmotes i ornitorrincs
            $imatges = $model->getImatges('monos');
            $this->assign('numMicos', count($imatges));
            $this->assign('imgMicos', $imatges);


            $imatges = $model->getImatges('marmotas');
            $this->assign('numMarm', count($imatges));
            $this->assign('imgMarm', $imatges);


            $imatges = $model->getImatges('ornitorrincos');
            $this->assign('numOrni', count($imatges));
            $this->assign('imgOrni', $imatges);

           if(Filter::getString('esborrar_mono')){
                $model->esborraImatge(Filter::getString('id_mono'), 'monos');
               header('Location: /esborrar',true,301);
            }
            if(Filter::getString('esborrar_marmota')){

                $model->esborraImatge( Filter::getString('id_marmorta'),'marmotas');
                header('Location: /esborrar',true,301);
            }
            if(Filter::getString('esborrar_ornitorrinco')){
                $model->esborraImatge(Filter::getString('id_ornitorrinco'), 'ornitorrincos');
                header('Location: /esborrar',true,301);
            }
            if(Filter::getString('editar_ornitorrinco')){
                header('Location: /modificar',true,301);
            }
            if(Filter::getString('editar_mono')){
                header('Location: /modificar',true,301);
            }
            if(Filter::getString('editar_marmota')){
                header('Location: /modificar',true,301);
            }
            $this->setLayout($this->view_home);
        }else{
            $this->setLayout($this->view_error);
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
