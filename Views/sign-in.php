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
                <h2 class="sign-card-ttl">ログインする</h2>
                <form action="" method="post" class="sign-card-form">
                    <div class="sign-card-text">
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="sign-card-text">
                        <label for="password">パスワード</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="sign-card-btn">
                        <button type="submit">ログイン</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include_once('../Views/common/foot.php'); ?>
</body>
</html>