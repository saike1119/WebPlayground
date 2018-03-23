<?php
include_once('db_def.php');

$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);

if ($mysqli->connect_error) {
    echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
    exit();
}

$mysqli->set_charset('utf8');

//sql select処理
//$sql = "SELECT * FROM ????";
$res = $mysqli->query($sql);

$mysqli->close();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
<div class="header">
    <h1>メンバーシャッフル</h1>
</div>
<ul id="nav">
    <li>
        <a href="http://192.168.33.10/vegetable_home.php">ホーム</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable_add.php">メンバー追加</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable_delete.php">メンバー削除</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable_update.php">メンバー更新</a>
    </li>
</ul>
<h2>メンバーリスト</h2>
</body>
</html>