<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php

include_once('../db_key/db_def_member.php');

$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);

if ($mysqli->connect_error) {
    echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
    exit();
}

$mysqli->set_charset('utf8');

$mysqli->close();

?>
<br>
<input type="button" value="前のページへ戻る" onClick="location.href='home_member_shuffle.php'">
</body>
</html>
