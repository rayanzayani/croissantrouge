<?php

class Input
{

    public static function get ($key, $value = null)
    {
        if (array_key_exists($key, $_POST)) {
            return $_POST[$key];
        } else 
            if ($_FILES[$key]) {
                return $_FILES[$key];
            } else {
                return $value;
            }
    }

    public static function catching ()
    {
        if (! Session::get('flash_input'))
            Session::set('flash_input', array());
        $session = Session::get('flash_input');
        if ($_POST) {
            foreach ($_POST as $key => $value) {
                $session[$key] = $value;
            }
        }
        Session::set('flash_input', $session);
    }

    public static function old ($key)
    {
        if (! Session::get('flash_input'))
            return false;
        $session = Session::get('flash_input');
        if (array_key_exists($key, $session)) {
            $msg = $session[$key];
            unset($session[$key]);
            Session::set('flash_input', $session);
            return $msg;
        }
    }

    public static function error ($key)
    {
        if (! Session::get('flash_error'))
            return false;
        $session = Session::get('flash_error');
        if (array_key_exists($key, $session)) {
            $msg = $session[$key];
            unset($session[$key]);
            Session::set('flash_error', $session);
            
            return $msg;
        }
    }

    public static function clear ()
    {
        Session::del('flash_input');
        Session::del('flash_error');
        return true;
    }
}