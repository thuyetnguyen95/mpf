<?php
// Get item edit info
if ($action === 'edit' && $_GET['id']) {
    $id = $_GET['id'];
    $itemEdit = getItemBuy($id);
}

// Update item edit
if ($action === 'updateItem' && $_POST['id']) {
    $updated = updateItemBought($_POST);

    if ($updated) {
        Redirect::to("?view=listBought");
    } else {
        dd('Oops! Something went wrong, please refresh and try again!');
    }
}

function getItemBuy($id) {
    $db = new DB();
    $db->connect();
    $sql = "SELECT * FROM `mpf_bought` WHERE id = $id";
    $result = $db->fetchOne($sql);
    $db->disconnect();

    return $result;
}

function updateItemBought ($requestData) {
    $id = $requestData['id'];
    $typeId = $requestData['type_id'];
    $buydate = $requestData['buydate'];
    $itemname = $requestData['itemname'];
    $itemcost = $requestData['itemcost'];
    $comment = $requestData['comment'];

    $sqlUpdate = "
        UPDATE `mpf_bought`
        SET type_id = $typeId,
        name = '$itemname',
        cost = $itemcost,
        buydate = '$buydate',
        comment = '$comment'
        WHERE id = '$id'
    ";

    $db = new DB();
    $db->connect();
    $updated = $db->query($sqlUpdate);
    $db->disconnect();

    return $updated;
}