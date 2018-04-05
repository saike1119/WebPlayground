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

// 接続を閉じる
$pdo = null;
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>プロフィール編集</title>
</head>
<body>
<h1>プロフィール編集画面</h1>
<!-- ユーザーIDにHTMLタグが含まれても良いようにエスケープする -->
<p>ようこそ<u><?php echo htmlspecialchars($_SESSION["NAME"], ENT_QUOTES); ?></u>さん</p>  <!-- ユーザー名をechoで表示 -->
<form action="#" method="post">
    名前: <input title="名前を入力" type="text" name="name"/><br>
    名前: <input title="を入力" type="text" name="password"/><br>
    名前: <input title="名前を入力" type="text" name="birthday"/><br>
    名前: <input title="名前を入力" type="text" name="address"/><br>
    名前: <input title="名前を入力" type="text" name="email"/><br>
    <input type="submit" value="変更する"/>
</form>
    <li><a href="Main.php">メインページに戻る</a></li>
</ul>
</body>
</html>