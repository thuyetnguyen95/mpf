<?php
require_once "core/init.php";

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    Redirect::to($_domain.'app/');
}

$adminUsername = trim(htmlspecialchars(addslashes($_POST['username'])));
$adminPassword = trim(htmlspecialchars(addslashes($_POST['password'])));
$remember = $_POST['remember'];

$showAlert = '<script>$("#formSignin .alert").removeClass("hidden");</script>';
$hideAlert = '<script>$("#formSignin .alert").addClass("hidden");</script>';
$success = '<script>$("#formSignin .alert").attr("class", "alert alert-success");</script>';
$timeOut = '<script>$(document).ready(function() {setTimeout(function() {';
if ($adminUsername == '' || $adminPassword == '') {
    echo $showAlert.'Vui lòng điền đầy đủ thông tin.';
} else {
    $sql = "select username from mpf_admin where username = '$adminUsername'";
    if ($db->getTotalRecord($sql)) {
        $adminPasswordMd5 = md5($adminPassword);
        $sql = "select username,password from mpf_admin where username = '$adminUsername' and password = '$adminPasswordMd5'";
        if ($db->getTotalRecord($sql)) {
            $sqlCheckStatus = "SELECT username, password, status FROM mpf_admin WHERE username = '$adminUsername' AND password = '$adminPasswordMd5' AND status = '0'";
            if ($db->getTotalRecord($sqlCheckStatus)) {
                $session->saveSession($adminUsername, $adminPassword);
                $db->disconnect();
                rememberMe($remember);
                echo $showAlert.$success.'Login success!';
                echo $timeOut.'location.href="'.$_domain.'";}, 1000);});';
            } else {
                echo $showAlert.'Your account is blocked! Please confirm to admin thuyettiensinh@gmail.com!';
            }
        } else {
            echo $showAlert."Password is not correct!";
        }
    } else {
        echo $showAlert."Username is not correct!";
    }
}

/**
 * Remember me function
 *
 * @param [int] $remember
 * 
 * @return void
 */
function rememberMe($remember) {
    if (isset($remember) && $remember == 1) {
        setcookie('username', $_SESSION['username'], time() + 7*24*60*60);
        setcookie('password', $_SESSION['password'], time() + 7*24*60*60);
    } else {
        setcookie('username', $_SESSION['username'], time() - 7*24*60*60);
        setcookie('password', $_SESSION['password'], time() - 7*24*60*60);
    }
}
