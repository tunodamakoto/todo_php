<?php
///////////////////////////////////////
// 便利な関数
///////////////////////////////////////

/**
* ユーザー情報をセッションに保存
*
* @param array $user
* @return array|false
*/
function saveUserSession(array $user)
{
    // セッションを開始指定ない場合
    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['USER'] = $user;
}


/**
* ユーザー情報をセッションから削除
*
* @return void
*/
function deleteUserSession()
{
    // セッションを開始指定ない場合
    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    unset($_SESSION['USER']);
}



/**
* セッションのユーザー情報を取得
*
* @return array|false
*/
function getUserSession()
{
    // セッションを開始指定ない場合
    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // セッションにユーザー情報がない場合
    if(!isset($_SESSION['USER'])) {
        return false;
    }

    $user = $_SESSION['USER'];

    return $user;
}
