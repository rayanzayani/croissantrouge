<?php
class InnovAdmin_Controller {
	
	protected $_controller;
	protected $_action;
	protected $_tpl;
	
	function __construct($controller, $action) {
		$this->_controller = $controller;
		$this->_action = $action;
		
		/* Templaite */
		$config = array (
			"tpl_dir" => ROOT . DS . 'skin' . DS . Registry::singleton()->getSetting ( 'SKIN_ADMIN' ) . DS . 'views' . DS,
			"public_dir" => '/skin/' . Registry::singleton()->getSetting ( 'SKIN_ADMIN' ) . '/public/',
		);
		Template::configure ( $config );

		$this->render = true;
		$this->_tpl = Registry::singleton()->getObject ( 'tpl' );
		$this->set('url', Registry::singleton()->getSetting('BASE_URL' ));
	}
	
	public function set($key, $value) {
		$this->_tpl->assign ( $key, $value );
	}
	
	public function include_file($file) {
		if (file_exists ( ROOT . DS . 'includes' . DS . strtolower ( $file ) . '.php' )) {
			require_once (ROOT . DS . 'includes' . DS . strtolower ( $file ) . '.php');
		}
	}
	
	function __destruct() {
		$this->_tpl->assign ( 'current', $this->_controller );
		if ($this->render) {
			$this->_tpl->draw ( $this->_controller . '_' . $this->_action );
		}
	}
	
	public function beforeAction() {
		
		if($this->_controller != 'login'){
			if(!Auth::check()){
				Redirect::To('login', 'index');
			}
		}
		
	}
	
	public function afterAction() {

	}
	
}