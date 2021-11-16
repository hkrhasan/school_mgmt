<?php


/**
 * Authentication class
 */

class Auth
{
    public static function authenticate($row)
    {
        $_SESSION['USER'] = $row;
    }

    public static function logged_in()
    {
        if (isset($_SESSION['USER'])) {
            return true;
        }

        return false;
    }

    public static function logout()
    {
        if (isset($_SESSION['USER'])) {
            unset($_SESSION['USER']);
        }
    }

    public static function __callStatic($method, $args)
    {
        $prop = strtolower(str_replace('get', '', $method));
        if (isset($_SESSION['USER']->$prop)) {
            return $_SESSION['USER']->$prop;
        }

        return 'Unknown';
    }
}
