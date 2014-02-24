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

//----------- EXERCICI 1 -----------------
$config['home']					    = 'Exercici1HomeController';
$config['mono1']					= 'Exercici1MicosgransController';
$config['mono2']					= 'Exercici1MicosgransController';
$config['mono3']					= 'Exercici1MicosgransController';
$config['mono4']					= 'Exercici1MicosgransController';
$config['mono5']					= 'Exercici1MicosgransController';
$config['mono6']					= 'Exercici1MicospetitsController';
$config['mono7']					= 'Exercici1MicospetitsController';
$config['mono8']					= 'Exercici1MicospetitsController';
$config['mono9']					= 'Exercici1MicospetitsController';
$config['mono10']					= 'Exercici1MicospetitsController';

//----------------------------------------

