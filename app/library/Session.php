<?php

class Session
{
    public function __construct() {
        session_start();
    }

    public function saveSession($username, $password, $id)
    {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['id'] = $id;
    }

    public function getUserSession()
    {
        return isset($_SESSION['username']) ? $_SESSION['username'] : '';
    }

    public function destroySession()
    {
        session_destroy();
    }
}