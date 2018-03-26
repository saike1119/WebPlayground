<!--TODOログインと連携させる-->
<?php
include_once('../db_key/db_def_vegetable.php');

$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);

if ($mysqli->connect_error) {
    echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
    exit();
}

$mysqli->set_charset('utf8');

//sql select処理
$sql = "SELECT * FROM profile";
$res = $mysqli->query($sql);

$mysqli->close();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="header">
    <h1>お野菜管理<img src="../img/vegetable_main.png" alt="logo" width="50" height="50"></h1>
</div>
<ul id="nav">
    <li>
        <a href="http://192.168.33.10/vegetable/vegetable_home.php">ホーム</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable/vegetable_add.php">お野菜追加</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable/vegetable_delete.php">お野菜削除</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable/vegetable_update.php">お野菜更新</a>
    </li>
    <li>
        <a href="#">利用者情報</a>
    </li>
    <li>
        <a href="#">ログアウト</a>
    </li>
</ul>
<h2>利用者情報</h2>
<?php foreach ($res as $value): ?>
    <div class="contentBox">
        <p><span><?php echo '利用者ID: ' . $value['id']; ?></span></p>
        <p><span><?php echo '利用者名: ' . $value['name']; ?></span></p>
        <p><span><?php echo '誕生日: ' . $value['birthday']; ?></span></p>
        <p><span><?php echo '住所: ' . $value['adress']; ?></span></p>
        <p><span><?php echo 'メールアドレス: ' . $value['email']; ?></span></p>
        <p><span><?php echo 'パスワード: ' . $value['pass']; ?></span></p>
    </div>
<?php endforeach; ?>
</body>
</html>