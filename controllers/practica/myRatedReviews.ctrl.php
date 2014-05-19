<?php
/**
 * Home Controller: Controller d'exemple.
 *
 * Coses a tenir en compte:
 * 	-> El controller fa un "extends Controller"
 * 	-> El controller necessitar� sempre un m�tode "public function build(){...}"
 */
class PracticaMyRatedReviewsController extends Controller
{
    protected $view = 'practica/myRatedReviews.tpl';


    /**
     * Aquest m�tode sempre s'executa i caldr� implementar-lo sempre.
     */
    public function build()
    {
        $this->setLayout($this->view);
    }

}
