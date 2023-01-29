<?php
///////////////////////////////////////
// todoコントローラー
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

// ToDo追加
if(isset($_POST['todo'])) {
    $data = [
        'user_id' => $user['id'],
        'card_id' => $_GET['card_id'],
        'todo' => $_POST['todo']
    ];

    if(createTodo($data)) {
        header('Location: ' .HOME_URL. 'Controllers/todo.php?card_id='.$data['card_id']. '');
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

$view_todos = findTodos($user['id'], $requested_card_id);

include_once '../Views/todo.php';