<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../Views/common/head.php'); ?>
    <title>TO DO</title>
</head>
<body>
    <?php include_once('../Views/common/header.php'); ?>
    <main class="content">
        <div class="content-inner grid">
            <?php if(isset($view_cards)): ?>
                <?php foreach($view_cards as $view_card): ?>
                    <a href="todo.php?card_id=<?php echo htmlspecialchars($view_card['id']); ?>" class="card" style="background:<?php echo htmlspecialchars($view_card['color']); ?>;">
                        <h2 class="card-ttl"><?php echo htmlspecialchars($view_card['card']); ?></h2>
                        <?php if(findTodos($user['id'], $view_card['id'])): ?>
                            <ul class="todo-card-list">
                            <?php foreach(findTodos($user['id'], $view_card['id']) as $view_todo): ?>
                                <li>
                                    <input type="checkbox" name="todo-check" class="checked" id="check-<?php echo htmlspecialchars($view_todo['card_id']); ?>-<?php echo htmlspecialchars($view_todo['id']); ?>">
                                    <label class="checked-text" for="check-<?php echo htmlspecialchars($view_todo['card_id']); ?>-<?php echo htmlspecialchars($view_todo['id']); ?>"><?php echo htmlspecialchars($view_todo['todo']); ?></span>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </main>
    <?php include_once('../Views/common/foot.php'); ?>
</body>
</html>