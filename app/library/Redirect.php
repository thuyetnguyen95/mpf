<?php

class Redirect
{
    public static function to($url = null) {
        echo '<script>location.href="'.$url.'";</script>';
    }
}