<?php
require_once "config.php";
require_once "library/DB.php";
require_once "library/Session.php";
require_once "library/Redirect.php";

$db = new DB();
$db->connect();

date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentDate = date('Y-m-d H:i:sa');

$session = new Session();
$user = ($session->getUserSession() != '') ? $session->getUserSession() : '';

if ($user) {
	$sql = "SELECT * FROM mpf_admin WHERE username = '$user'";
	if ($db->getTotalRecord($sql)) {
		$data_user = $db->fetchAll($sql, 1);
	}
}