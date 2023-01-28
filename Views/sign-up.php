<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../Views/common/head.php'); ?>
    <title>TO DO</title>
</head>
<body>
    <?php include_once('../Views/common/header.php'); ?>
    <main class="content">
        <div class="content-inner sign">
            <div class="sign-card">
                <h2 class="sign-card-ttl">アカウント登録</h2>
                <form action="" method="post" class="sign-card-form">
                    <?php if(isset($error_message)): ?>
                        <ul class="error-message">
                        <?php foreach($error_message as $value): ?>
                            <li>・<?php echo $value; ?></li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="sign-card-text">
                        <label for="name">名前</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="sign-card-text">
                        <label for="email">メールアドレス</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="sign-card-text">
                        <label for="password">パスワード</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="sign-card-text">
                        <label for="password-confirm">確認用パスワード</label>
                        <input type="password" id="password-confirm" name="password-confirm" required>
                    </div>
                    <div class="sign-card-btn">
                        <button type="submit">登録する</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include_once('../Views/common/foot.php'); ?>
</body>
</html>