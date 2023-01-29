<?php
///////////////////////////////////////
// ToDoデータを処理
///////////////////////////////////////

/**
* ToDo作成
*
* @param array $data
* @return bool
*/
function createTodo(array $data)
{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました : ' .$mysqli->connect_error. "\n";
        exit;
    }

    $query = 'INSERT INTO todos (user_id, card_id, todo) VALUES (?, ?, ?)';

    $statement = $mysqli->prepare($query);

    $statement->bind_param('iis', $data['user_id'], $data['card_id'], $data['todo']);

    $response = $statement->execute();
    if($response === false) {
        echo 'エラーメッセージ：' .$mysqli->error. "\n";
    }

    $statement->close();
    $mysqli->close();

    return $response;
}


/**
* ToDo作成
*
* @param array $data
* @return bool
*/
function deleteTodo(int $data)
{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました : ' .$mysqli->connect_error. "\n";
        exit;
    }

    $query = 'DELETE FROM todos WHERE id = ?';

    $statement = $mysqli->prepare($query);

    $statement->bind_param('i', $data);

    $response = $statement->execute();

    if($response === false) {
        echo 'エラーメッセージ：' .$mysqli->error. "\n";
    }

    $statement->close();
    $mysqli->close();

    return $response;
}


/**
* ToDo一覧を取得
*
* @param int $user_id
* @param int $card_id
* @return bool
*/
function findTodos(int $user_id, int $card_id = null)
{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました : ' .$mysqli->connect_error. "\n";
        exit;
    }

    $query = 'SELECT * FROM todos WHERE user_id = "' .$user_id. '" AND card_id = "' .$card_id. '" ORDER BY created_at DESC';

    $result = $mysqli->query($query);

    if(!$result) {
        echo 'エラーメッセージ：' .$mysqli->error. "\n";
        $mysqli->close();
        return false;
    }

    $todos = $result->fetch_all(MYSQLI_ASSOC);

    if(!$todos) {
        $mysqli->close();
        return null;
    }

    $mysqli->close();

    return $todos;
}