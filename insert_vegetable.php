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

$flg_p = 0;
$flg_d = 0;
$flg_n = 0;

if (!empty($_POST['name'])) {
    $input_name = $_POST['name'];
    $name = mysqli_escape_string($mysqli, $input_name);
    echo $name . "</br>";
    $flg_n = 1;
} else {
    echo '名前を入力してください' . "</br>";
}

if (!empty($_POST['price'])) {
    $input_price = $_POST['price'];
    $price = intval(mysqli_escape_string($mysqli, $input_price));
    if (is_int($price) && $price !== 0) {
        echo $price . '円' . "</br>";
        $flg_p = 1;
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
    $flg_d = 1;
} else {
    echo '概要を入力してください' . "</br>";
}

//sql insert処理
if ($flg_n === 1 && $flg_d === 1 && $flg_p === 1) {
    $sql = "INSERT INTO `vegetable` (`id`, `name`, `price`, `description`) VALUES (NULL, '$name', '$price', '$description')";
    $res = $mysqli->query($sql);
}

//sql select処理
$sql = "SELECT * FROM vegetable";
$res = $mysqli->query($sql);

if($res) {
    var_dump($res->fetch_all());
}
$mysqli->close();

?>
<br>
<input type="button" value="前のページへ戻る" onclick="history.back()">
</body>
</html>
