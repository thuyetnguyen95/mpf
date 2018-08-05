<?php
$hasMoneyInMonth = false;
$money = getMoneyInMonth(date('n'));
if (!empty($money)) {
    $hasMoneyInMonth = true;
}

if (isset($_POST['submit']) && $action='addMoney') {

    if (!$hasMoneyInMonth) {
        $moneyFirst = $_POST['money_first'];
        $moneyRest = $moneyFirst;
        $moneyMax = $_POST['money_max'];
        $adminId = $_SESSION['id'];
        $month = date('n');

        $sql = "INSERT INTO mpf_money(money_first, money_rest, money_max, month, admin_id) VALUES($moneyFirst, $moneyRest, $moneyMax, $month, $adminId)";
    } else {
        $countMoneyAdd = $money['count_money_add'] + 1;
        $moneyAdd = $_POST['money_add'] + $money['money_add'];
        $id = $money['id'];

        $sql = "UPDATE mpf_money SET money_add = $moneyAdd, count_money_add = $countMoneyAdd WHERE id = $id";
    }

    $db = new DB();
    $db->connect();
    $insert = $db->query($sql);
    if ($insert) {
        $message = "Tiền đã được thêm!";
    }
    $db->disconnect();
}

// Get money in a month
function getMoneyInMonth($month) {
    $db = new DB();
    $db->connect();
    $sql = "SELECT * FROM `mpf_money` where month = $month";
    $money = $db->fetchAll($sql, 1);
    $db->disconnect();

    return $money;
}

// Get all money
$record_perpage = 20;
$db = new DB();
$db->connect();
$sqlGetAllMoney = "select count(*) as total from mpf_money";
$total_record = $db->getTotalRecord($sqlGetAllMoney);
$db->disconnect();
$num_page = ceil($total_record["total"]/$record_perpage);
$page = 1;
$page = isset($_GET["p"]) ? $_GET["p"]:0;
$page = $page <= 0 ? 0:$page-1;
$from = $page * $record_perpage;


$allMoney = getAllMoney($from, $record_perpage);
// var_dump($allMoney);die();


function getAllMoney($from, $record_perpage) {
    $adminId = $_SESSION['id'];
    $db = new DB();
    $db->connect();
    $sql = "SELECT * FROM `mpf_money` WHERE admin_id = $adminId ORDER By id DESC LIMIT $from,$record_perpage";
    $money = $db->fetchAll($sql);
    $db->disconnect();

    return $money;
}

?>