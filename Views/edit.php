<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../Views/common/head.php'); ?>
    <title>TO DO</title>
</head>
<body>
    <?php include_once('../Views/common/header.php'); ?>
    <main class="content">
        <div class="content-inner edit">
            <div class="edit-head">
                <a href="delete-card.php?card_id=<?php echo htmlspecialchars($view_card['id']); ?>" class="edit-delete">カードを削除</a>
            </div>
            <?php if(isset($view_card)): ?>
                <div class="edit-card" style="background:<?php echo htmlspecialchars($view_card['color']); ?>;">
                    <h2 class="edit-card-ttl"><?php echo htmlspecialchars($view_card['card']); ?></h2>
                    <form action="" method="post" class="edit-card-form">
                        <div class="edit-card-text">
                            <label for="card">カード名</label>
                            <input type="text" name="card" id="card" value="<?php echo htmlspecialchars($view_card['card']); ?>" placeholder="カード名" required>
                        </div>
                        <div class="edit-card-color">
                            <span>背景色</span>
                            <select name="color">
                                <option value="<?php echo htmlspecialchars($view_card['color']); ?>">背景色を選んでください</option>
                                <option value="#fce8e8">red</option>
                                <option value="#ecf2d0">yello</option>
                                <option value="#d0e3f2">blue</option>
                                <option value="#d3f5d5">green</option>
                                <option value="#fce8f3">pink</option>
                            </select>
                        </div>
                        <div class="edit-card-btn">
                            <a href="home.php" class="btn">キャンセル</a>
                            <button type="submit" class="btn">保存</button>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <?php include_once('../Views/common/foot.php'); ?>
</body>
</html>