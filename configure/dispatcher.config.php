<?php
/*
 * Cada ruta SEO es mapeada a un controlador que se encuentra en el 'base.config.php'
 */

/**
 * Aquest fitxer cont� les rutes SEO. 
 * 
 * Exemple d'us:
 * $config['hola']				= 'HolaIndexController';
 *
 * $config['hola'] equival a http://exemple.com/hola
 *
 * 'HolaIndexController' vol dir que:
 *		-> El fitxer php �s troba a: /instances/<la_vostra_instancia>/controllers/hola/index.ctrl.php
 * 		-> Dins de /controllers/hola/index.ctrl.php hi ha la class de nom "HolaIndexController"
 * 		-> Cal que "HolaIndexController" estigui declarada dins del fitxer "dispatcher.config.php"
 * 
 */
$config['default']				= 'HomeHomeController';
$config['home']					= 'HomeHomeController';

$config['error']	        = 'ErrorError404Controller';

//----------- EXERCICI 1 -----------------
$config['exercici1']		= 'Exercici1HomeController';
$config['micos']	        = 'Exercici1MicosController';
$config['micos']	        = 'Exercici1BotonsController';
//----------------------------------------

//----------- EXERCICI 2 -----------------
$config['exercici2']		= 'Exercici2HomeController';
//----------------------------------------