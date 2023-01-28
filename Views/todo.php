<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../Views/common/head.php'); ?>
    <title>TO DO</title>
</head>
<body>
    <?php include_once('../Views/common/header.php'); ?>
    <main class="content">
        <div class="content-inner todo">
            <div class="todo-head">
                <a href="" class="todo-delete">完了済みを削除</a>
                <a href="edit.php?card_id=<?php echo htmlspecialchars($view_card['id']); ?>" class="todo-edit">編集</a>
            </div>
            <div class="todo-card" style="background:<?php echo htmlspecialchars($view_card['color']); ?>;">
                <h2 class="todo-card-ttl"><?php echo htmlspecialchars($view_card['card']); ?></h2>
                <form action="" method="post" class="todo-card-form">
                    <input type="text" placeholder="タスクを追加">
                    <button type="submit">追加</button>
                </form>
                <ul class="todo-card-list">
                    <li>
                        <input type="checkbox" id="check-1">
                        <label for="check-1">読書</span>
                    </li>
                    <li>
                        <input type="checkbox" id="check-2">
                        <label for="check-2">個人開発</span>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <?php include_once('../Views/common/foot.php'); ?>
</body>
</html>