<?php
///////////////////////////////////////
// ホームコントローラー
///////////////////////////////////////
include_once '../config.php';
include_once '../util.php';
include_once '../Models/cards.php';
include_once '../Models/todos.php';

// ログインチェック
$user = getUserSession();
if(!$user) {
    header('Location: ' .HOME_URL. 'Controllers/sign-in.php');
    exit;
}

$view_cards = findCards($user);

$view_todos = findTodos($user['id'], null);

include_once '../Views/home.php';