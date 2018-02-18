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
    echo $mysqli->connect_error;
    exit();
}

$mysqli->set_charset('utf8');

if (!empty($_POST['vegetable'])) {
    $vegetable_value = $_POST['vegetable'];
    $vegetable = mysqli_escape_string($mysqli, $vegetable_value);
    echo $vegetable;
} else {
    echo '値を入力してください';
}

$sql = "";
$res = $mysqli->query($sql);

$mysqli->close();

?>
<br>
<input type="button" value="前のページへ戻る" onclick="history.back()">
</body>
</html>
