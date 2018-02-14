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

if (isset($_POST['fruitsName'])) {
    $vegetable = $_POST['vegetable'];
    $fruitsName = mysqli_escape_string($mysqli, $fruitsName);
}

$mysqli->close();

?>
<br>
<input type="button" value="前のページへ戻る" onclick="history.back()">
</body>
</html>
