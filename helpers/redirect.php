<?php
class Redirect {

	public static function To($controller, $action = null, $param = null) {
		$url = Registry::getSetting ( 'BASE_URL' );
		
		if ($action == null) {
			header ( 'Location: ' . $url . $controller );
		}
		elseif ($param == null) {
			header ( 'Location: ' . $url . $controller . '/' . $action );
		}
		else {
			$p = "";
			if (is_array ( $param )) {
				foreach ( $param as $value ) {
					$p .= '/' . $value;
				}
			}
			else {
				$p = '/' . $param;
			}
			header ( 'Location: ' . $url . $controller . '/' . $action . $p );
		}
	}
}