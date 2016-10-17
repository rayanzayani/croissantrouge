<?php
class Innov_Controller {
	
	protected $_controller;
	protected $_action;
	protected $_tpl;
	
	function __construct($controller, $action) {
		$this->_controller = $controller;
		$this->_action = $action;
		
		$this->render = true;
		$this->_tpl = Registry::singleton ()->getObject ( 'tpl' );
		
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
	}
	
	public function afterAction() {
	}
	
}