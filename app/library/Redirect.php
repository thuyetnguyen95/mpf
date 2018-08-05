<?php

class Redirect
{
    public static function to($url = null) {
        ob_start();
        // var_dump($url);die();
        header( "location: $url" );
    }
}