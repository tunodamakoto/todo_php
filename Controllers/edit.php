<?php
///////////////////////////////////////
// エディットコントローラー
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

// カード情報を変更
if(isset($_POST['card']) && isset($_POST['color'])) {
    $data = [
        'user_id' => $user['id'],
        'card_id' => $_GET['card_id'],
        'card' => $_POST['card'],
        'color' => $_POST['color']
    ];

    if(updateCard($data)) {
        header('Location: ' .HOME_URL. 'Controllers/home.php');
        exit;
    }
}

if(isset($_GET['card_id']) && $_GET['card_id'] !== '') {
    $requested_card_id = $_GET['card_id'];
} else {
    header('Location: ' .HOME_URL. 'Controllers/home.php');
    exit;
}

$view_card = findCard($requested_card_id);

include_once '../Views/edit.php';