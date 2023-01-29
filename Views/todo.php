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
                <div class="todo-delete">完了済みを削除</div>
                <a href="edit.php?card_id=<?php echo htmlspecialchars($view_card['id']); ?>" class="todo-edit">編集</a>
            </div>
            <div class="todo-card" style="background:<?php echo htmlspecialchars($view_card['color']); ?>;">
                <h2 class="todo-card-ttl"><?php echo htmlspecialchars($view_card['card']); ?></h2>
                <form action="" method="post" class="todo-card-form">
                    <input type="text" name="todo" placeholder="タスクを追加" autofocus required>
                    <button type="submit">追加</button>
                </form>
                <?php if(isset($view_todos)): ?>
                    <ul class="todo-card-list">
                    <?php foreach($view_todos as $view_todo): ?>
                        <li>
                            <input type="checkbox" name="todo-check" class="checked" id="<?php echo htmlspecialchars($view_todo['id']); ?>">
                            <label class="checked-text" for="<?php echo htmlspecialchars($view_todo['id']); ?>"><?php echo htmlspecialchars($view_todo['todo']); ?></label>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </main>
    <?php include_once('../Views/common/foot.php'); ?>
</body>
</html>