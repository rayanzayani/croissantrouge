<?php


Class Auth {
   
    public $session_prefix     = 'auth_';
    public $db_var             = 'db';   // database connection variable
    public $tablename          = '';     // The name of the database tablename
    public $username_col       = 'username';  // The name of the table field that contains the username.
    public $password_col       = 'password';  // The name of the table field that contains the password.
    public $md5                = TRUE;        // Whether to use md5 hash.
    public $allow_login        = TRUE;        // Whether to allow logins to be performed on this page.

    public $post_username      = '';     // The name of the form field that contains the username to authenticate.
    public $post_password      = '';     // The name of the form field that contains the password to authenticate.
    public $advanced_security  = TRUE;   // Whether to enable the advanced security features.
    public $query_binding      = TRUE;   // Whether to enable the PDO query binding feature for security.
    public $regenerate_sess_id = FALSE;  // Set to TRUE to regenerate the session id on every page load or leave as FALSE to regenerate only upon new login.
    
    public $not_ok_url         = '/login';
    public $ok_url             = '/dashboard';
    public $fields             = array();
    
    
    /**
    * Constructor
    *
    * Sets the variables and runs the compilation routine
    *
    * @version   0.1
    * @access    public
    * @return    void
    */
    public function __construct($params = array())
    {   
    }
    
    
    // ------------------------------------------------------------------------
    
    /**
    * Send post query to login
    * 
    * @param string $username  manually login username
    * @param string $password  manually login password
    * @return bool | object
    */
    public static function login($username = '', $password = '')
    {	 
        if(Registry::singleton()->getSetting ( 'auth_md5' ) AND !Auth::is_md5($password))
        {
            $password = md5($password);
        }
		
		$user = Innov_Model::factory(Registry::singleton()->getSetting('auth_tablename'))
														  ->where(Registry::singleton()->getSetting('username_col'), $username)
														  ->where(Registry::singleton()->getSetting('password_col'), $password)
														  ->find_one();
			
		if($user){
			Session::set(Registry::singleton()->getSetting('session_prefix'), $user->as_array());
			return TRUE;
		}
		return FALSE;
    }
    
    // ------------------------------------------------------------------------
    
    /**
     * Autheticate the user if login is successfull !
     * 
     * @return bool
     */
    public static function fake_auth()
    {
		Session::set(Registry::singleton()->getSetting('session_prefix'),1); // Just authenticate the user.
        return TRUE;
    }
    
    
    // ------------------------------------------------------------------------
    
    /**
     * Get User is authenticated 
     * if its ok it returns to TRUE otherwise FALSE
     * 
     * @return boolean 
     */
    public static function check()
    {
        if(Session::get(Registry::singleton()->getSetting('session_prefix')))  // auth is ok ?
        {
        	return TRUE;
        }
        return FALSE;
    }
    

    // ------------------------------------------------------------------------
    
    /**
    * Retrieve authenticated user session data
    * 
    * @param string $key
    * @return mixed
    */
    public static function data()
    {
        return Session::get(Registry::singleton()->getSetting('session_prefix'));
    }
    
    
    // ------------------------------------------------------------------------
    
    /**
    * Unset session auth data from user session container
    * 
    * @param string $key
    * @return void
    */
    public function unset_data($key)
    {
        if(is_array($key))
        {
            sess_unset($key, $this->session_prefix);
            return;
        }
        
        sess_unset($key, $this->session_prefix);
    }
    
    
    // ------------------------------------------------------------------------
    
    /**
     * Check password is md5.
     * 
     * @access private
     * @param string $md5
     * @return boolean 
     */
    public static function is_md5($md5)
    {
        if(empty($md5)) 
        {
            return FALSE;
        }
        
        return preg_match('/^[a-f0-9]{32}$/', $md5);
    }

    
    // ------------------------------------------------------------------------
    
    /**
    * Logout user and destroy session auth data.
    * 
    * @param bool $sess_destroy whether to use session destroy function
    * @return void 
    */
    public static function logout($sess_destroy = False)
    {
		Session::del(Registry::singleton()->getSetting('session_prefix'));
        if($sess_destroy)
        {
            Session::clean();
            return;
        }
    }
    
}

// END Auth Class

/* End of file Auth.php */
/* Location: ./obullo/libraries/Auth.php */