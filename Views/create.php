<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../Views/common/head.php'); ?>
    <title>TO DO | Create Card</title>
</head>
<body>
    <?php include_once('../Views/common/header.php'); ?>
    <main class="content">
        <div class="content-inner edit">
            <div class="edit-card" style="background:#f4f4f4;">
                <h2 class="sign-card-ttl">カードを作る</h2>
                <form action="" method="post" class="edit-card-form">
                    <div class="edit-card-text">
                        <label for="card">カード名</label>
                        <input type="text" id="card" name="card" placeholder="カード名" required>
                    </div>
                    <div class="edit-card-color">
                        <span>背景色</span>
                        <select name="color">
                            <option value="#f4f4f4">背景色を選んでください</option>
                            <option value="#fce8e8">red</option>
                            <option value="#ecf2d0">yello</option>
                            <option value="#d0e3f2">blue</option>
                            <option value="#d3f5d5">green</option>
                            <option value="#fce8f3">pink</option>
                        </select>
                    </div>
                    <div class="edit-card-btn">
                        <a href="home.php" class="btn">キャンセル</a>
                        <button type="submit" class="btn">作成</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include_once('../Views/common/foot.php'); ?>
</body>
</html>