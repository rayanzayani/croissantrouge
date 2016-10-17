<?php
class Registry {
	private static $objects = array ();
	private static $settings = array ();
	private static $instance;

	private function __construct() {
	}

	public static function singleton() {
		if (! isset ( self::$instance )) {
			$obj = __CLASS__;
			self::$instance = new $obj ();
		}
		return self::$instance;
	}

	public function __clone() {
		trigger_error ( 'Cloning the registry is not permitted', E_USER_ERROR );
	}

	public function setObject($key, $object) {
		require_once (ROOT . DS . 'core' . DS . 'objects' . DS . $object . '.php');
		self::$objects [$key] = new $object ();
	}

	public function getObject($key) {
		if (is_object ( self::$objects [$key] )) {
			return self::$objects [$key];
		}
	}

	public function setSetting($key, $data) {
		self::$settings [$key] = $data;
	}

	public function getSetting($key) {
		return self::$settings [$key];
	}

	public function storeCoreObjects() {

		
		// $this->setObject ( 'orm' );
		$this->setObject ( 'tpl', 'template' );
	}
}
