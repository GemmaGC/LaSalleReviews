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

/*
        if(count($info['url_arguments']) < 1){
            $this->assign('titol', 'HOME EXERCICI 4');
            $this->assign('afegir', '/editaZoo');
            $this->assign('enrere', '/home');

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

           //ESBORRAR
           if(Filter::getString('esborrar')){
              $values = explode( "-", Filter::getString("id") );
              $model->esborraImatge($values[1], $values[0]);
              header('Location: /esborrar',true,301);
           }

            //MODIFICAR
            //$values = explode( "-", Filter::getString("id") );
            if(Filter::getString('editar')){
                $values = explode( "-", Filter::getString("id") );
                //header('Location: /modificar/'.$values[0].'-'.$values[1],true,301);
                /*if(strcmp($values[0], 'monos')){
                    header('Location: /modificarMico',true,301);
                }

                if(strcmp($values[0], 'marmotas')){
                    header('Location: /modificarMarmota',true,301);
                }

                if(strcmp($values[0], 'ornitorrincos')){
                    header('Location: /modificarOrnitorrinc',true,301);
                }*/
            //}


/*
            if(Filter::getString('editar_ornitorrinco')){
                header('Location: /modificar',true,301);
            }

            if(Filter::getString('editar_mono')){
                header('Location: /modificar',true,301);
            }

            if(Filter::getString('editar_marmota')){
                header('Location: /modificar',true,301);
            }*/

            $this->setLayout($this->view_home);
       /* }else{
            $this->setLayout($this->view_error);
        }*/



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
