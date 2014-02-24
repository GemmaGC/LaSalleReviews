<?php
/**
 * Micos Grans Controller: Controller dels micos grans.
 */
class Exercici1MicospetitsController extends Controller
{
    protected $view = 'exercici1/micospetits.tpl';

    public function build()
    {
        $info = $this->getParams();
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