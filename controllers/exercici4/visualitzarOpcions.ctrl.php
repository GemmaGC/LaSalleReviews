<?php
/**
 * Home Controller de l'exercici 4
 */
class Exercici4VisualitzarOpcionsController extends Controller
{
    protected $view_home = 'exercici4/visualitzarOpcions.tpl';
    protected $view_error = 'error/error404.tpl';

    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {
        $info = $this->getParams();

        if(!isset($info['url_arguments'])){
            $this->assign('modificar', '/opcionsZoo');
            $this->assign('enrere', '/exercici4');

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

            $values = explode( "-", Filter::getString("id") );

           //ESBORRAR
           if(Filter::getString('esborrar')){

              Session::getInstance()->set('id', $values[1]);
              $model->esborraImatge($values[1], $values[0]);
              header('Location: /esborrar',true,301);
           }

            if(Filter::getString('editar_ornitorrinco')){
                Session::getInstance()->set('id', $values[1]);
                $orni['nom'] = $values[2];
                $orni['url'] = $values[3];
                Session::getInstance()->set('ornitorrincos', $orni);
                header('Location: /modificarOrnitorrinc',true,301);
            }

            if(Filter::getString('editar_mono')){
                Session::getInstance()->set('id', $values[1]);
                $mono['nom'] = $values[2];
                $mono['url'] = $values[3];
                Session::getInstance()->set('nom', $values[2]);
                Session::getInstance()->set('url', $values[3]);
                header('Location: /modificarMico',true,301);
            }

            if(Filter::getString('editar_marmota')){
                Session::getInstance()->set('id', $values[1]);
                $marmo['nom'] = $values[2];
                $marmo['url'] = $values[3];
                Session::getInstance()->set('marmotas', $marmo);
                header('Location: /modificarMarmota',true,301);
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
