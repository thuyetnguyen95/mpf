<?php require_once "core/init.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "include/header.php";?>
    <style>
        .panel {border-radius: 0%;}
        .form-control {border-radius: 0%;}
        .input-group-addon {border-radius: 0%;}
        .btn {border-radius: 0%;}
        .btn:hover {box-shadow: 1px 2px 10px 2px #bababa; transition: 0.3s}
        .panel-heading {border-radius: 0%;}
        .nav-pills>li>a {border-radius: 0%; box-shadow: 3px 3px 3px #b7b7b7}
        .nav {border-radius: 0%; border-bottom: 1px solid #ddd}
    </style>
</head>
<body>
<?php
    if (!$user) {
        require_once "/templates/loginTemplate.php";
    } else {
?>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <?php include "include/topNavbar.php";?>
        <?php include "include/sidebar.php";?>
    </nav>
    <div id="page-wrapper">
        <?php include "include/loadView.php";?>
    </div>
</div>
<?php } ?>
<?php require_once "include/footer.php";?>
</body>
</html>