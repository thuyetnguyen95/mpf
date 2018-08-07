<?php
ob_start();
class Redirect
{
    public static function to($route = null) {
        header("location: $__fullDomain.$route");
    }
}