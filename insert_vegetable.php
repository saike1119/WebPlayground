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

if (!empty($_POST['name'])) {
    $input_name = $_POST['name'];
    $name = mysqli_escape_string($mysqli, $input_name);
    echo $name;
} else {
    echo '名前を入力してください' . "</br>";
}

if (!empty($_POST['price'])) {
    $input_price = $_POST['price'];
    $price = intval(mysqli_escape_string($mysqli, $input_price));
    if (is_int($price) && $price !== 0) {
        echo $price . '円' . "</br>";
    } else {
        echo '数字を入力してください' . "</br>";
    }
} else {
    echo '価格を入力してください' . "</br>";
}

if (!empty($_POST['description'])) {
    $input_description = $_POST['description'];
    $description = mysqli_escape_string($mysqli, $input_description);
    echo $description;
} else {
    echo '概要を入力してください' . "</br>";
}

$sql = "";
$res = $mysqli->query($sql);

$mysqli->close();

?>
<br>
<input type="button" value="前のページへ戻る" onclick="history.back()">
</body>
</html>
