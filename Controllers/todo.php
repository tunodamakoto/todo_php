<?php
///////////////////////////////////////
// todoコントローラー
///////////////////////////////////////
include_once '../config.php';
include_once '../util.php';
include_once '../Models/cards.php';

// ログインチェック
$user = getUserSession();
if(!$user) {
    header('Location: ' .HOME_URL. 'Controllers/sign-in.php');
    exit;
}

if(isset($_GET['card_id']) && $_GET['card_id'] !== '') {
    $requested_card_id = $_GET['card_id'];
} else {
    header('Location: ' .HOME_URL. 'Controllers/home.php');
    exit;
}

$view_card = findCard($requested_card_id);

include_once '../Views/todo.php';