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

    $sql = "INSERT INTO mpf_bought(type_id, name, cost, comment, buydate, admin_id)
        VALUES($itemType, '$itemName', $itemCost, '$comment', '$buyDate', $adminId)";
    $db = new DB();
    $db->connect();
    $insert = $db->query($sql);
    if ($insert) {
        $message = "Add items just bought successfully!";
    }
    $db->disconnect();
    $newItem = true;
    $justBought = getJustBought();
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
    

    $sql = "INSERT INTO mpf_intend_buy(type_id, name, cost, comment, buydate, link, admin_id)
        VALUES($itemType, '$itemName', $itemCost, '$comment', '$buyDate', '$link', $adminId)";
    
    $db = new DB();
    $db->connect();
    $insert = $db->query($sql);
    if ($insert) {
        $message = "Add items intend to buy successfully!";
    }
    $db->disconnect();
    $newItem = false;
    $newItemIntend = true;
    $justBought = getJustBought();
}

function getJustBought() {
    $db = new DB();
    $db->connect();
    $sqlJustBought = "SELECT * FROM `mpf_bought` ORDER By id DESC LIMIT 50";
    $justBought = $db->fetchAll($sqlJustBought);
    $db->disconnect();

    return $justBought;
}