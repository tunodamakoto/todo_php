<?php
///////////////////////////////////////
// カードデータを処理
///////////////////////////////////////

/**
* カード作成
*
* @param array $data
* @return bool
*/
function createCard(array $data)
{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました : ' .$mysqli->connect_error. "\n";
        exit;
    }

    $query = 'INSERT INTO cards (user_id, card, color) VALUES (?, ?, ?)';

    $statement = $mysqli->prepare($query);

    $statement->bind_param('iss', $data['user_id'], $data['card'], $data['color']);

    $response = $statement->execute();
    if($response === false) {
        echo 'エラーメッセージ：' .$mysqli->error. "\n";
    }

    $statement->close();
    $mysqli->close();

    return $response;
}


/**
* カードを更新
*
* @param array $data
* @return bool
*/
function updateCard(array $data)
{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました : ' .$mysqli->connect_error. "\n";
        exit;
    }

    $data['updated_at'] = date('Y-m-d H:i:s');

    $set_columns = [];
    foreach(['card', 'color', 'updated_at'] as $column) {
        if(isset($data[$column]) && $data[$column] !== '') {
            $set_columns[] = $column . ' = "' . $mysqli->real_escape_string($data[$column]) . '"';
        }
    }

    $query = 'UPDATE cards SET ' .join(',', $set_columns);
    $query .= 'WHERE id = "' .$mysqli->real_escape_string($data['card_id']) . '"';

    $response = $mysqli->query($query);

    if($response === false) {
        echo 'エラーメッセージ：' .$mysqli->error. "\n";
    }

    $mysqli->close();

    return $response;
}


/**
* カードを削除
*
* @param int $card_id
* @return bool
*/
function deleteCard($card_id)
{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました : ' .$mysqli->connect_error. "\n";
        exit;
    }

    $card_id = $mysqli->real_escape_string($card_id);

    $query = 'DELETE FROM cards WHERE id = "' .$card_id. '"';

    $response = $mysqli->query($query);

    if($response === false) {
        echo 'エラーメッセージ：' .$mysqli->error. "\n";
    }

    $mysqli->close();

    return $response;
}


/**
* カード1件を取得
*
* @param int $card_id
* @return array|false
*/
function findCard(int $card_id)
{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました : ' .$mysqli->connect_error. "\n";
        exit;
    }

    $card_id = $mysqli->real_escape_string($card_id);

    $query = 'SELECT * FROM cards WHERE id = "' .$card_id. '"';

    if($result = $mysqli->query($query)) {
        $response = $result->fetch_array(MYSQLI_ASSOC);
    } else {
        $response = false;
        echo 'エラーメッセージ：' .$mysqli->error. "\n";
    }

    $mysqli->close();

    return $response;
}


/**
* カード一覧を取得
*
* @param array $user ログインしているユーザー情報
* @return array|false
*/
function findCards(array $user)
{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました : ' .$mysqli->connect_error. "\n";
        exit;
    }

    $query = 'SELECT * FROM cards WHERE user_id = "' .$user['id']. '" ORDER BY created_at DESC';

    $result = $mysqli->query($query);

    if(!$result) {
        echo 'エラーメッセージ：' .$mysqli->error. "\n";
        $mysqli->close();
        return false;
    }

    $cards = $result->fetch_all(MYSQLI_ASSOC);

    if(!$cards) {
        $mysqli->close();
        return null;
    }

    $mysqli->close();

    return $cards;
}