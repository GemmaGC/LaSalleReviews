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
//Controllers exercici 1

$config['Exercici1HomeController']		        = PATH_CONTROLLERS . 'exercici1/home.ctrl.php';
$config['Exercici1MicospetitsController']		= PATH_CONTROLLERS . 'exercici1/micospetits.ctrl.php';
$config['Exercici1MicosgransController']		= PATH_CONTROLLERS . 'exercici1/micosgrans.ctrl.php';

//----------------------------------------