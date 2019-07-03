<?php
// required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
$ahihi = [
	['name' => 'thuyet0', 'age' => 24],
	['name' => 'thuyet1', 'age' => 212],
	['name' => 'thuyet2', 'age' => 14],
	['name' => 'thuyet3', 'age' => 25],
	['name' => 'thuyet4', 'age' => 26],
	['name' => 'thuyet5', 'age' => 18],
];

$xxxx = json_encode($ahihi);

echo $xxxx;
