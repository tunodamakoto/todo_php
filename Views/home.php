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
                        <ul class="card-list">
                            <li>
                                <input type="checkbox" id="check-5-1">
                                <label for="check-5-1">読書</span>
                            </li>
                            <li>
                                <input type="checkbox" id="check-5-2">
                                <label for="check-5-2">個人開発</span>
                            </li>
                            <li>
                                <input type="checkbox" id="check-5-3">
                                <label for="check-5-3">スーパーで買い物</span>
                            </li>
                        </ul>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </main>
    <?php include_once('../Views/common/foot.php'); ?>
</body>
</html>