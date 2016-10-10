<?php
class Session {
	public function __construct() {
		// $remote_ip = $_SERVER['REMOTE_ADDR'];
		// $remote_agent_hash = isset($_SERVER['HTTP_USER_AGENT']) ? md5($_SERVER['HTTP_USER_AGENT']) : null;
	}
	public static function start() {
		if (! session_id ()) {
			session_start (); // Start the sessions
		}
		return TRUE;
	}
	public static function set($key, $value) {
		$_SESSION [$key] = $value;
	}
	public static function get($key) {
		if (isset ( $_SESSION [$key] )) {
			return $_SESSION [$key];
		} else {
			return False;
		}
	}
	public static function del($key) {
		unset ( $_SESSION [$key] );
	}
	public static function clean() {
		session_destroy ();
	}
	public static function __callstatic($method, $args) {
		if (preg_match ( '#^set#i', $method )) {
			$var = str_replace ( 'set', '', $method );
			$_SESSION [$var] = $args [0];
		}
		if (preg_match ( '#^get#i', $method )) {
			$var = str_replace ( 'get', '', $method );
			if (isset ( $_SESSION [$var] )) {
				return $_SESSION [$var];
			} else {
				return False;
			}
		}
		if (preg_match ( '#^del#i', $method )) {
			$var = str_replace ( 'del', '', $method );
			unset ( $_SESSION [$var] );
		}
		return null;
	}
	public function __destruct() {
		session_destroy ();
	}
}