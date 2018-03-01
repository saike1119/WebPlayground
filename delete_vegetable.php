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

if (!empty($_POST['id'])) {
    $input_id = $_POST['id'];
    $id = mysqli_escape_string($mysqli, $input_id);
    echo $id . "</br>";
} else {
    echo 'idを入力してください' . "</br>";
}

$mysqli->close();

?>
<br>
<input type="button" value="前のページへ戻る" onClick="location.href='vegetable_home.php'">
</body>
</html>
