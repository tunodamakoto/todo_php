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
            <div class="card" style="background:#eee3eb;">
                <h2 class="card-ttl">新規タスク</h2>
                <ul class="card-list">
                </ul>
            </div>
            <a href="" class="card" style="background:#f4f4f4;">
                <h2 class="card-ttl">今日のタスク</h2>
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
            <a href="" class="card" style="background:#ede2d4;">
                <h2 class="card-ttl">今月の目標</h2>
                <ul class="card-list">
                    <li>
                        <input type="checkbox" id="check-4-1">
                        <label for="check-4-1">読書</span>
                    </li>
                    <li>
                        <input type="checkbox" id="check-4-2">
                        <label for="check-4-2">個人開発</span>
                    </li>
                </ul>
            </a>
            <a href="" class="card" style="background:#d3f5d5;">
                <h2 class="card-ttl">買い物リスト</h2>
                <ul class="card-list">
                    <li>
                        <input type="checkbox" id="check-3-1">
                        <label for="check-3-1">読書</span>
                    </li>
                    <li>
                        <input type="checkbox" id="check-3-2">
                        <label for="check-3-2">個人開発</span>
                    </li>
                </ul>
            </a>
            <a href="" class="card" style="background:#d0e3f2;">
                <h2 class="card-ttl">ロードマップ</h2>
                <ul class="card-list">
                    <li>
                        <input type="checkbox" id="check-2-1">
                        <label for="check-2-1">読書</span>
                    </li>
                    <li>
                        <input type="checkbox" id="check-2-2">
                        <label for="check-2-2">個人開発</span>
                    </li>
                    <li>
                        <input type="checkbox" id="check-2-3">
                        <label for="check-2-3">スーパーで買い物</span>
                    </li>
                </ul>
            </a>
            <a href="" class="card" style="background:#ecf2d0;">
                <h2 class="card-ttl">目標</h2>
                <ul class="card-list">
                    <li>
                        <input type="checkbox" id="check-1-1">
                        <label for="check-1-1">読書</span>
                    </li>
                    <li>
                        <input type="checkbox" id="check-1-2">
                        <label for="check-1-2">個人開発</span>
                    </li>
                    <li>
                        <input type="checkbox" id="check-1-3">
                        <label for="check-1-3">スーパーで買い物</span>
                    </li>
                </ul>
            </a>
        </div>
    </main>
    <?php include_once('../Views/common/foot.php'); ?>
</body>
</html>