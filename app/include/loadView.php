<?php
    if (isset($_GET['view'])) {
        $view = $_GET['view'];
    } else {
        $view = 'home';
    }

    $action = '';
    if (isset($_GET['act'])) {
        $action = $_GET['act'];
    }

    include(includeView($view));

    function includeView($view) {
        if ($view == 'home') {
            $view = 'index';
        }
        $view .= 'Template';

        return "templates/$view.php";
    }
?>
