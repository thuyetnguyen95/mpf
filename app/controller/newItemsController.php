<?php
$message = "";
$newItem = true;
$newItemIntend = false;
$justBought = getJustBought();

if (!empty($_POST) && $action == 'addItem') {
    $itemType = $_POST['itemtype'];
    $itemName = $_POST['itemname'];
    $buyDate = $_POST['buydate'];
    $itemCost = $_POST['itemcost'];
    $comment = $_POST['comment'];
    $adminId = $_SESSION['id'];

    // money deduction when you buy something
    updateMoney($itemCost);

    $sql = "INSERT INTO mpf_bought(type_id, name, cost, comment, buydate, admin_id)
        VALUES($itemType, '$itemName', $itemCost, '$comment', '$buyDate', $adminId)";
    $db = new DB();
    $db->connect();
    $insert = $db->query($sql);
    if ($insert) {
        $message = "Sản phẩm đã mua được thêm thành công!";
    }
    $db->disconnect();
    $newItem = true;
    $justBought = getJustBought();
    Redirect::to("?view=newItems");
}

if (!empty($_POST) && $action == 'addItemIntend') {
    $itemType = $_POST['itemtype_intend'];
    $itemName = $_POST['itemname_intend'];
    $buyDate = $_POST['buydate_intend'];
    $itemCost = $_POST['itemcost_intend'];
    $comment = $_POST['comment_intend'];
    $isOnline = $_POST['isOnline'];
    $link = isset($_POST['link_intend']) ? $_POST['link_intend'] : '';
    $adminId = $_SESSION['id'];
    if ($isOnline == 0) {
        $link = '';
    }

    // money deduction when you buy something
    updateMoney($itemCost);

    $sql = "INSERT INTO mpf_intend_buy(type_id, name, cost, comment, buydate, link, admin_id)
        VALUES($itemType, '$itemName', $itemCost, '$comment', '$buyDate', '$link', $adminId)";
    
    $db = new DB();
    $db->connect();
    $insert = $db->query($sql);
    if ($insert) {
        $message = "Sản phẩm dự định mua được thêm thành công!";
    }
    $db->disconnect();
    $newItem = false;
    $newItemIntend = true;
    $justBought = getJustBought();
    Redirect::to("?view=newItems");
}

//=========== Helper function ==================

function getJustBought() {
    $db = new DB();
    $db->connect();
    $sqlJustBought = "SELECT * FROM `mpf_bought` ORDER By id DESC LIMIT 50";
    $justBought = $db->fetchAll($sqlJustBought);
    $db->disconnect();

    return $justBought;
}

function updateMoney($payMoney)
{
    $moneyInCurrentMonth = getMoneyInMonth();
    $moneyRest = $moneyInCurrentMonth['money_rest'] - $payMoney;
    $id = $moneyInCurrentMonth['id'];
    $overMax = $moneyInCurrentMonth['over_max'];
    if ($payMoney > $moneyInCurrentMonth['money_max']) {
        $overMax = $moneyInCurrentMonth['over_max'] + 1;
    }

    $sql = "UPDATE mpf_money SET over_max = $overMax, money_rest = $moneyRest WHERE id = $id";
    $db = new DB();
    $db->connect();
    $insert = $db->query($sql);
    $db->disconnect();
}

// Get money in a month
function getMoneyInMonth() {
    $month = date('n');
    $db = new DB();
    $db->connect();
    $sql = "SELECT * FROM `mpf_money` where month = $month";
    $money = $db->fetchAll($sql, 1);
    $db->disconnect();

    return $money;
}
