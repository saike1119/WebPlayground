<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
<?php

include_once('db_def.php');

$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);

if ($mysqli->connect_error) {
    echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
    exit();
}

$mysqli->set_charset('utf8');

$flg_i = 0;

$id = $_POST['id'];

if (empty($id)) {
    echo 'idを入力してください' . "</br>";
} elseif (!is_numeric($id)) {
    echo 'idを数字で入力してください' . "</br>";
} else {
    echo '管理ID:' . $id . "</br>";
    var_dump($id);
    $flg_i = 1;
}

//sql delete処理
if ($flg_i === 1) {
    $sql = "DELETE FROM `vegetable` WHERE `vegetable`.`id` = $id";
    $res = $mysqli->query($sql);
    echo '上記を削除しました！！';
}

$mysqli->close();

?>
<br>
<input type="button" value="前のページへ戻る" onClick="location.href='vegetable_home.php'">
</body>
</html>