<?php
///////////////////////////////////////
// ユーザーデータを処理
///////////////////////////////////////

/**
* ユーザーを作成
*
* @param array $data
* @return bool
*/
function createUser(array $data)
{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました : ' .$mysqli->connect_error. "\n";
        exit;
    }

    $query = 'INSERT INTO users (name, email, password) VALUES (?, ?, ?)';

    $statement = $mysqli->prepare($query);

    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

    $statement->bind_param('sss', $data['name'], $data['email'], $data['password']);

    $response = $statement->execute();

    if($response === false) {
        echo 'エラーメッセージ：' .$mysqli->error. "\n";
    }

    $statement->close();
    $mysqli->close();

    return $response;
}


/**
* ユーザー情報取得：ログインチェック
*
* @param string $email
* @param string $password
* @return array|false
*/
function findUserAndCheckPassword(string $email, string $password)
{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました : ' .$mysqli->connect_error. "\n";
        exit;
    }

    $email = $mysqli->real_escape_string($email);

    $query = 'SELECT * FROM users WHERE email = "' .$email. '"';

    $result = $mysqli->query($query);

    if(!$result) {
        echo 'エラーメッセージ：' .$mysqli->error. "\n";
        $mysqli->close();
        return false;
    }

    $user = $result->fetch_array(MYSQLI_ASSOC);

    if(!$user) {
        $mysqli->close();
        return false;
    }

    if(!password_verify($password, $user['password'])) {
        $mysqli->close();
        return false;
    }

    $mysqli->close();

    return $user;
}