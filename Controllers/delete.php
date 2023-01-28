<?php
///////////////////////////////////////
// デリートコントローラー
///////////////////////////////////////
include_once '../config.php';
include_once '../util.php';
include_once '../Models/cards.php';

if(!empty($_GET['card_id'])) {
    $card_id = $_GET['card_id'];
    if(deleteCard($card_id)) {
        header('Location: ' .HOME_URL. 'Controllers/home.php');
        exit;
    }
} else {
    header('Location: ' .HOME_URL. 'Controllers/home.php');
    exit;
}