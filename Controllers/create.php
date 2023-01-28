<?php
///////////////////////////////////////
// ホームコントローラー
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

// カード作成
if(isset($_POST['card']) && isset($_POST['color'])) {
    $data = [
        'user_id' => $user['id'],
        'card' => $_POST['card'],
        'color' => $_POST['color']
    ];

    if(createCard($data)) {
        header('Location: ' .HOME_URL. 'Controllers/home.php');
        exit;
    }
}

include_once '../Views/create.php';