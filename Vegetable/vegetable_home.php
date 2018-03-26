<?php
include_once('../db_key/db_def.php');

$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);

if ($mysqli->connect_error) {
    echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
    exit();
}

$mysqli->set_charset('utf8');

//sql select処理
$sql = "SELECT * FROM vegetable";
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
        <a href="http://192.168.33.10/vegetable_home.php">ホーム</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable_add.php">お野菜追加</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable_delete.php">お野菜削除</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable_update.php">お野菜更新</a>
    </li>
    <li>
        <a href="#">利用者情報</a>
    </li>
    <li>
        <a href="#">ログアウト</a>
    </li>
</ul>
<h2>野菜一覧</h2>
<?php foreach ($res as $value): ?>
    <div class="contentBox">
        <p><span><?php echo '管理ID: ' . $value['id']; ?></span></p>
        <p><span><?php echo '野菜名: ' . $value['name']; ?></span></p>
        <p><span><?php echo '値段: ' . $value['price']; ?></span></p>
        <p><span><?php echo '概要: ' . $value['description']; ?></span></p>
    </div>
<?php endforeach; ?>
</body>
</html>