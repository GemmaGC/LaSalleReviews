<?php
/*
 * Archivo donde se definen las constantes 
 */
if( strpos( $_SERVER['HTTP_HOST'], '.local' ) !== false )
{
	/**
	 * Entorn de desenvolupament (el vostre ordinador)
	 */
	define( 'URL_ABSOLUTE', 'http://default.local');
	define( 'DEV_MODE' , true );
	define( 'SQL_DEBUG', true );
}
else
{
	echo 'Error -> Instancia de pruebas para uso local con el nombre <i>default.local</i>';
	exit;
}

define( 'PATH_ROOT', $_SERVER['DOCUMENT_ROOT'].'/' );
define( 'INSTANCE_PATH', PATH_ROOT . '../' );
define( 'PATH_ENGINE', PATH_ROOT . '../../../engine/');
define( 'PATH_CONFIGURE', INSTANCE_PATH . 'configure/');
define( 'PATH_SMARTY', PATH_ENGINE . 'smarty/');
define( 'PATH_CONTROLLERS', INSTANCE_PATH . 'controllers/');
define( 'PATH_MODELS', INSTANCE_PATH . 'models/');
define( 'PATH_TEMPLATES', INSTANCE_PATH . 'templates/');
define( 'PATH_TEMPLATES_C', INSTANCE_PATH . 'templates_c/');