<?php

$_domain = "http://localhost/mpf/";
$__fullDomain = "http://localhost/mpf/app/";

function dd($data) {
    echo "<pre>";

    if (is_array($data)) {
        print_r($data);
    } else {
        var_dump($data);
    }

    echo "</pre>";
    die();
}