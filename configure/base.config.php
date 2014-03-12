<?php
/*
 * Archivo de configuraci�n de las clases que usaremos
 * Se llama desde Configure::getClass('NombreClase');
 */

/**
 * Engine:  Aquests par�metres no els toqueu.
 */
//$config['factory']						=  PATH_ENGINE . 'factory.class.php';
//$config['sql']							=  PATH_ENGINE . 'sql.class.php';


$config['mail']							=  PATH_ENGINE . 'mail.class.php';
$config['session']						=  PATH_ENGINE . 'session.class.php';
$config['user']							=  PATH_ENGINE . 'user.class.php';
$config['url']							=  PATH_ENGINE . 'url.class.php';
$config['uploader']						=  PATH_ENGINE . 'uploader.class.php';


$config['dispatcher']					=  PATH_ENGINE . 'dispatcher.class.php';


/** 
 * Controllers i Models 
 *
 * Aqui cal que cada nou controller i model que feu servir quedi declarat. 
 * Si no ho feu, no funcionar� qual el crideu des d'una ruta definida al fitxer dispatcher.config.php
 */

// Controller per 404
$config['ErrorError404Controller']		= PATH_CONTROLLERS . 'error/error404.ctrl.php';

// Controller Home i Model Home
$config['HomeHomeController']			= PATH_CONTROLLERS . 'home/home.ctrl.php';

// Controllers compartits per tota la p�gina
$config['SharedHeadController']			= PATH_CONTROLLERS . 'shared/head.ctrl.php';
$config['SharedFooterController']		= PATH_CONTROLLERS . 'shared/footer.ctrl.php';


//----------- EXERCICI 1 -----------------

    //Controllers

$config['Exercici1HomeController']		= PATH_CONTROLLERS . 'exercici1/home.ctrl.php';
$config['Exercici1BotonsController']	= PATH_CONTROLLERS . 'exercici1/botons.ctrl.php';
$config['Exercici1MicosController']		= PATH_CONTROLLERS . 'exercici1/micos.ctrl.php';

//----------------------------------------



//----------- EXERCICI 2 -----------------

    //Controllers
$config['Exercici2HomeController']		= PATH_CONTROLLERS . 'exercici2/home.ctrl.php';
$config['Exercici2MostraController']    = PATH_CONTROLLERS . 'exercici2/mostra.ctrl.php';
$config['Exercici2AfegeixController']	= PATH_CONTROLLERS . 'exercici2/afegeix.ctrl.php';

    //Models
$config['Exercici2AfegeixModel']        = PATH_MODELS .'exercici2/afegeix.model.php';
$config['Exercici2MostraModel']         = PATH_MODELS .'exercici2/mostra.model.php';

//----------------------------------------



//----------- EXERCICI 3 -----------------

    //Controllers
$config['Exercici3HomeController']		                = PATH_CONTROLLERS . 'exercici3/home.ctrl.php';
$config['Exercici3MostraController']                    = PATH_CONTROLLERS . 'exercici3/mostra.ctrl.php';
$config['Exercici3AfegeixController']	                = PATH_CONTROLLERS . 'exercici3/afegeix.ctrl.php';
$config['Exercici3FormulariMonoController']	            = PATH_CONTROLLERS . 'exercici3/formulari_mono.ctrl.php';
$config['Exercici3FormulariOrnitorrincoController']	    = PATH_CONTROLLERS . 'exercici3/formulari_ornitorrinco.ctrl.php';
$config['Exercici3FormulariMarmotaController']	        = PATH_CONTROLLERS . 'exercici3/formulari_marmota.ctrl.php';
$config['Exercici3VisualitzadorController']         	= PATH_CONTROLLERS . 'exercici3/visualitzador.ctrl.php';

    //Model
$config['Exercici3GestorModel']             = PATH_MODELS .'exercici3/gestor.model.php';

//----------------------------------------