<?php
/*
 * Cada ruta SEO es mapeada a un controlador que se encuentra en el 'base.config.php'
 */

/**
 * Aquest fitxer conté les rutes SEO. 
 * 
 * Exemple d'us:
 * $config['hola']				= 'HolaIndexController';
 *
 * $config['hola'] equival a http://exemple.com/hola
 *
 * 'HolaIndexController' vol dir que:
 *		-> El fitxer php és troba a: /instances/<la_vostra_instancia>/controllers/hola/index.ctrl.php
 * 		-> Dins de /controllers/hola/index.ctrl.php hi ha la class de nom "HolaIndexController"
 * 		-> Cal que "HolaIndexController" estigui declarada dins del fitxer "dispatcher.config.php"
 * 
 */
$config['default']				= 'HomeHomeController';
$config['home']					= 'HomeHomeController';