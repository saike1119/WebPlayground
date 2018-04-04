<?php
session_start();

// ログイン状態チェック
if (!isset($_SESSION["NAME"])) {
    header("Location: Logout.php");
    exit;
}

$db['host'] = "localhost";  // DBサーバのURL
$db['user'] = "root";  // ユーザー名
$db['pass'] = "root";  // ユーザー名のパスワード
$db['dbname'] = "loginManagement";  // データベース名

try {
    // DBへ接続
    $dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);
    $pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $userName = $_SESSION['NAME'];

    // SQL作成
    $stmt = $pdo->prepare('SELECT * FROM userData WHERE name = ?');
    $stmt->execute(array($userName));

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    $errorMessage = 'データベースエラー';
    //$errorMessage = $sql;
    // $e->getMessage() でエラー内容を参照可能（デバッグ時のみ表示）
    // echo $e->getMessage();
}

// 接続を閉じる
$pdo = null;
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>プロフィール</title>
</head>
<body>
<h1>プロフィール情報画面</h1>
<!-- ユーザーIDにHTMLタグが含まれても良いようにエスケープする -->
<p>ようこそ<u><?php echo htmlspecialchars($_SESSION["NAME"], ENT_QUOTES); ?></u>さん</p>  <!-- ユーザー名をechoで表示 -->
<ul>
    <li>あなたのID: <?php echo $row['id'] ?></li>
    <li>あたなのユーザー名: <?php echo $row['name'] ?></li>

    <li><a href="Main.php">メインページに戻る</a></li>
</ul>
</body>
</html>