<?php

$record_perpage = 50;
$db = new DB();
$db->connect();
$sqlJustBought = "select count(*) as total from mpf_bought";
$total_record = $db->getTotalRecord($sqlJustBought);
$db->disconnect();
$num_page = ceil($total_record["total"]/$record_perpage);
$page = 1;
$page = isset($_GET["p"]) ? $_GET["p"]:0;
$page = $page <= 0 ? 0:$page-1;
$from = $page * $record_perpage;

$justBought = getJustBought($from, $record_perpage);


function getJustBought($from, $record_perpage) {
    $db = new DB();
    $db->connect();
    $sqlJustBought = "SELECT * FROM `mpf_bought` ORDER BY buydate DESC,id DESC LIMIT $from,$record_perpage";
    $justBought = $db->fetchAll($sqlJustBought);
    $db->disconnect();

    return $justBought;
}

$typeOfProducts = [
    1 => 'Thức ăn',
    2 => 'Nước uống',
    3 => 'Đồ ăn vặt',
    4 => 'Quẩn áo',
    5 => 'Dụng cụ nhà',
    6 => 'Loại khác ...',
];

//=============== DELETE ===============================
if ($action === 'delete') {
    $id = $_GET['id'];

    $deleted = delete($id);

    if (!$deleted) {
        dd('Oops! something went wrong!');
    } else {
        Redirect::to("?view=listBought");
    }
}

function delete($id) {
    $db = new DB();
    $db->connect();
    $sql = "DELETE FROM `mpf_bought` WHERE id = $id";
    $result = $db->query($sql);
    $db->disconnect();

    return $result;
}
?>