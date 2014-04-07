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
$config['default']			= 'HomeHomeController';
$config['home']				= 'HomeHomeController';

$config['error']	        = 'ErrorError404Controller';

//----------- EXERCICI 1 -----------------

$config['exercici1']		= 'Exercici1HomeController';
$config['micos']	        = 'Exercici1BotonsController';

//----------------------------------------


//----------- EXERCICI 2 -----------------

$config['exercici2']		= 'Exercici2HomeController';
$config['mostra']		    = 'Exercici2MostraController';
$config['afegeix']		    = 'Exercici2AfegeixController';

//----------------------------------------


//----------- EXERCICI 3 -----------------

$config['mostraZoo']		= 'Exercici3MostraController';
$config['afegeixZoo']		= 'Exercici3AfegeixController';
$config['exercici3']		= 'Exercici3HomeController';

//----------------------------------------


//----------- EXERCICI 4 -----------------

$config['exercici4']                = 'Exercici4HomeController';
$config['modificar']		        = 'Exercici4ModificarController';
$config['modificarMico']		    = 'Exercici4ModificarMicoController';
$config['modificarMarmota']		    = 'Exercici4ModificarMarmotaController';
$config['modificarOrnitorrinc']		= 'Exercici4ModificarOrnitorrincController';
$config['esborrar']		            = 'Exercici4EsborrarController';

//----------------------------------------



//----------- LA SALLE REVIEW -----------------

$config['register']             = 'PracticaRegistreController';
$config['benvinguda']           = 'PracticaBenvingudaController';

$config['LaSalleReview']        = 'PracticaHomeController';
$config['logIn']                = 'PracticaLoginController';
$config['addReview']            = 'PracticaAddReviewController';



//----------------------------------------