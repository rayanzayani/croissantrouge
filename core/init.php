<?php
Session::start ();
// Session::clean();

// strip the url query
$url = ($_GET && $_GET ['url']) ? $_GET ['url'] : null;
$url = preg_replace ( '/\?.+$/i', '', $url );

require_once (ROOT . DS . 'core' . DS . 'registry.php');
$registry = Registry::singleton ();

// store objects in registry
$registry->storeCoreObjects ();

require_once (ROOT . DS . 'core' . DS . 'config.php');

date_default_timezone_set ( $registry->getSetting ( 'TIMEZONE' ) );

/* ORM Config */
ORM::configure ( 'mysql:host=' . $registry->getSetting ( 'DB_HOST' ) . ';dbname=' . $registry->getSetting ( 'DB_NAME' ) );
ORM::configure ( 'username', $registry->getSetting ( 'DB_USER' ) );
ORM::configure ( 'password', $registry->getSetting ( 'DB_PASS' ) );
ORM::configure ( 'logging', $registry->getSetting ( 'LOGGING' ) );

Innov_Model::$auto_prefix_models = $registry->getSetting ( 'DB_PREFIX' );

/* Get Setting from database */
/*$setting = Innov_Model::factory ( 'Setting' )->find_one ( 1 );
if ($setting) {
	$registry->setSetting ( 'BASE_URL', $setting->site_url );
	$registry->setSetting ( 'SKIN', $setting->site_skin );
}
// else get default setting from config.php

/* Templaite for admin */
if (strpos ( $url, 'admin' ) !== false) {
	
	$registry->setSetting ( 'SKIN', 'admin' );
}

/* Templaite */
$config = array (
		"tpl_dir" => ROOT . DS . 'skin' . DS . $registry->getSetting ( 'SKIN' ) . DS . 'views' . DS,
		"public_dir" => '/skin/' . $registry->getSetting ( 'SKIN' ) . '/public/',
		"cache_dir" => ROOT . DS . 'tmp' . DS . 'cache' . DS,
		"tpl_ext" => $registry->getSetting ( 'TPL_EXT' ),
		"base_url" => $registry->getSetting ( 'BASE_URL' ),
		"php_enabled" => $registry->getSetting ( 'PHP_ENABLED' ),
		"debug" => $registry->getSetting ( 'DEBUG' ),
		"path_replace" => $registry->getSetting ( 'PATH_REPLACE' ) 
);

Template::configure ( $config );

// explode() the string into an array of parameters
$urlArray = array ();

if ($url != null) {
	if ((strlen ( $url ) - 1) == strrpos ( $url, "/" )) {
		$url = substr_replace ( $url, "", strrpos ( $url, "/" ), strlen ( "/" ) );
	}
	$urlArray = explode ( "/", $url );
}

// for an empty string we assume the user wants to access default controller/action
if (! count ( $urlArray )) {
	Redirect::To ( 'home', 'index' );
} else if (count ( $urlArray ) < 2) {
	$urlArray [1] = $registry->getSetting ( 'BASE_ACTION' );
}
/*
if ($urlArray [0] == 'admin')
	array_shift ( $urlArray );
*/
$controller = $urlArray [0];
array_shift ( $urlArray );

$action = $urlArray [0];
array_shift ( $urlArray );

$params = array_map ( 'urldecode', $urlArray );

$controllerName = $controller;
$controller = ucwords ( $controller );
$controller .= '_controller';

// Instantiate and call the controller methods
try {
	
	if (class_exists ( $controller )) {
		$dispatch = new $controller ( $controllerName, $action );
	} else {
		$dispatch = new Error_controller( 'error', '404' );
		call_user_func_array ( array (
				$dispatch,
				'action_404' 
		), $params );
		die();
	}
	$action = 'action_' . $action;
	if (method_exists ( $dispatch, $action )) {
		call_user_func_array ( array (
				$dispatch,
				"beforeAction" 
		), $params );
		call_user_func_array ( array (
				$dispatch,
				$action 
		), $params );
		call_user_func_array ( array (
				$dispatch,
				"afterAction" 
		), $params );
	} else {
		$dispatch = new Error_controller( 'error', '404' );
		call_user_func_array ( array (
				$dispatch,
				'action_404' 
		), $params );
		die();
		//throw new Exception ( "Invalid call to non-existent {$controller}::{$action}." );
	}
} catch ( Exception $e ) {
	echo '<pre>' . $e->getMessage () . '</pre>';
}

/**
 * Execute of action
 */
function performAction($controller, $action, $queryString = array(), $render = false) {
	$controllerName = ucfirst ( $controller ) . '_controller';
	$dispatch = new $controllerName ( $controller, $action );
	$dispatch->render = $render;
	$action = 'action_' . $action;
	return call_user_func_array ( array (
			$dispatch,
			$action 
	), $queryString );
}

/**
 * Autoload any classes that are required *
 */
function __autoload($className) {
	if (file_exists ( ROOT . DS . 'core' . DS . 'objects' . DS . strtolower ( $className ) . '.php' )) {
		require_once (ROOT . DS . 'core' . DS . 'objects' . DS . strtolower ( $className ) . '.php');
	}
	if (file_exists ( ROOT . DS . 'helpers' . DS . strtolower ( $className ) . '.php' )) {
		require_once (ROOT . DS . 'helpers' . DS . strtolower ( $className ) . '.php');
	}
	if (file_exists ( ROOT . DS . 'application' . DS . 'controllers' . DS . strtolower ( $className ) . '.php' )) {
		require_once (ROOT . DS . 'application' . DS . 'controllers' . DS . strtolower ( $className ) . '.php');
	}
	if (file_exists ( ROOT . DS . 'application' . DS . 'models' . DS . strtolower ( $className ) . '.php' )) {
		require_once (ROOT . DS . 'application' . DS . 'models' . DS . strtolower ( $className ) . '.php');
	}
}
