<?php
///////////////////////////////////////
// サインインコントローラー
///////////////////////////////////////
include_once '../config.php';
include_once '../util.php';
include_once '../Models/users.php';

// アカウント登録
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password-confirm'])) {

    // パスワード確認
    if($_POST['password'] != $_POST['password-confirm']){
        $error_message[] = "パスワードが一致しません。";
    } else{
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];
    
        // アカウント作成
        if(createUser($data)) {
            header('Location: ' .HOME_URL. 'Controllers/sign-in.php');
            exit;
        }
    }

}

include_once '../Views/sign-up.php';