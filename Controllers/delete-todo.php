<?php
///////////////////////////////////////
// デリートコントローラー
///////////////////////////////////////
include_once '../config.php';
include_once '../util.php';
include_once '../Models/cards.php';
include_once '../Models/todos.php';

// // ToDo削除
if(isset($_POST['data_id'])) {
    $data = $_POST['data_id'];

    foreach($data as $value){
        deleteTodo($value);
    }
}

// JSON形式で結果を返却
$response = [
    'message' => 'successful',
    // いいね！したときに値が入る
    'data_id' => $data_id,
];
header('Content-Type: application/json; charset=uft-8');
echo json_encode($response);