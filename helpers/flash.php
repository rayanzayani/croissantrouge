<?php
//--------------------------------------------------------------------------------------------------
// Session-Based Flash Messages v1.0
// Copyright 2012 Mike Everhart (http://mikeeverhart.net)
//
//   Licensed under the Apache License, Version 2.0 (the "License");
//   you may not use this file except in compliance with the License.
//   You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
//   Unless required by applicable law or agreed to in writing, software
//   distributed under the License is distributed on an "AS IS" BASIS,
//   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//   See the License for the specific language governing permissions and
//	 limitations under the License.
//	 
//------------------------------------------------------------------------------
// Description:
//------------------------------------------------------------------------------
//
//	Stores messages in Session data to be easily retrieved later on.
// 	This class includes four different types of messages:
//  - Success
//  - Error
//  - Warning
//  - Information
// 
//  See README for basic usage instructions, or see samples/index.php for more advanced samples
//
//--------------------------------------------------------------------------------------------------
// Changelog
//--------------------------------------------------------------------------------------------------
// 
//	2011-05-15 - v1.0 - Initial Version
//
//--------------------------------------------------------------------------------------------------

class Flash {
	
	//-----------------------------------------------------------------------------------------------
	// Class Variables
	//-----------------------------------------------------------------------------------------------	
	static public $msgTypes = array( 'help', 'info', 'warning', 'success', 'error' );
	static public $msgClass = 'messages';
	static public $msgWrapper = "<div class='%s %s'><a href='#' class='closeMessage'></a>\n%s</div>\n";
	static public $msgBefore = '<p>';
	static public $msgAfter = "</p>\n";

	
	/**
	 * Add a message to the queue
	 * 
	 * @author Mike Everhart
	 * 
	 * @param  string   $type        	The type of message to add
	 * @param  string   $message     	The message
	 * @param  string   $redirect_to 	(optional) If set, the user will be redirected to this URL
	 * @return  bool 
	 * 
	 */
	public static function add($type, $message, $redirect_to=null) {
		if( !Session::get('flash_messages') ) Session::set('flash_messages', array());
		if( !isset($type) || !isset($message[0]) ) return false;

		// Replace any shorthand codes with their full version
		if( strlen(trim($type)) == 1 ) {
			$type = str_replace( array('h', 'i', 'w', 'e', 's'), array('help', 'info', 'warning', 'error', 'success'), $type );
		
		// Backwards compatibility...
		} elseif( $type == 'information' ) {
			$type = 'info';	
		}
		
		// Make sure it's a valid message type
		if( !in_array($type, Flash::$msgTypes) ) die('"' . strip_tags($type) . '" is not a valid message type!' );
		
		// If the session array doesn't exist, create it
		$session = Session::get('flash_messages');
		if( !array_key_exists( $type, $session ) ) $session[$type] = array();
		
		$session[$type][] = $message;
		
		Session::set('flash_messages', $session);

		if( !is_null($redirect_to) ) {
			header("Location: $redirect_to");
			exit();
		}
		
		return true;
		
	}
	
	//-----------------------------------------------------------------------------------------------
	// display()
	// print queued messages to the screen
	//-----------------------------------------------------------------------------------------------
	/**
	 * Display the queued messages
	 * 
	 * @author Mike Everhart
	 * 
	 * @param  string   $type     Which messages to display
	 * @param  bool  	$print    True  = print the messages on the screen
	 * @return mixed              
	 * 
	 */
	public static function display($type='all', $print=false) {
		$messages = '';
		$data = '';
		if( !Session::get('flash_messages') ) return false;
		
		if( $type == 'g' || $type == 'growl' ) {
			$this->displayGrowlMessages();
			return true;
		}
		$session = Session::get('flash_messages');
		// Print a certain type of message?
		if( in_array($type, Flash::$msgTypes) && array_key_exists( $type, $session )  ) {
			foreach( $session[$type] as $msg ) {
				$messages .= Flash::$msgBefore . $msg . Flash::$msgAfter;
			}
			$data .= sprintf(Flash::$msgWrapper, Flash::$msgClass, $type, $messages);
			
			// Clear the viewed messages
			Flash::clear($type);
		
		// Print ALL queued messages
		} elseif( $type == 'all' ) {
			foreach( $session as $type => $msgArray ) {
				$messages = '';
				foreach( $msgArray as $msg ) {
					$messages .= Flash::$msgBefore . $msg . Flash::$msgAfter;	
				}
				$data .= sprintf(Flash::$msgWrapper, Flash::$msgClass, $type, $messages);
			}
			
			// Clear ALL of the messages
			Flash::clear();
		
		// Invalid Message Type?
		} else { 
			return false;
		}
		
		// Print everything to the screen or return the data
		if( $print ) { 
			echo $data; 
		} else { 
			return $data; 
		}
	}
	
	
	/**
	 * Check to  see if there are any queued error messages
	 * 
	 * @author Mike Everhart
	 * 
	 * @return bool  true  = There ARE error messages
	 *               false = There are NOT any error messages
	 * 
	 */
	public static function hasErrors() { 
		$session = Session::get('flash_messages');
		return empty($session['error']) ? false : true;	
	}
	
	/**
	 * Clear messages from the session data
	 * 
	 * @author Mike Everhart
	 * 
	 * @param  string   $type     The type of messages to clear
	 * @return bool 
	 * 
	 */
	public static function clear($type='all') { 
		if( $type == 'all' ) {
			Session::del('flash_messages');
		} else {
			$session = Session::get('flash_messages');
			unset($session[$type]);
			Session::set('flash_messages', $session);
		}
		return true;
	}

} // end class
?>