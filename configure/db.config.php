<?php

if( DEV_MODE )
{
	/**
	 * Aquest camps s'han d'omplir amb les dades del vostre servidor 
	 * web local que teniu en el vostre ordenador instal�lat.
	 */
	$config['default']['db_driver']		= 'mysql';
	$config['default']['db_host']		= 'localhost';
	$config['default']['db_user']		= 'root';
	$config['default']['db_password']	= '';
	$config['default']['db_name']		= '';
}
else
{
	/**
	 * Aquests camps s'han d'omplir amb les dades de l'email que us 
	 * faran arribar els professors un cop formeu grup.
	 */
	$config['default']['db_driver']		= 'mysql';
	$config['default']['db_host']		= '';
	$config['default']['db_user']		= '';
	$config['default']['db_password']	= '';
	$config['default']['db_name']		= '';
}