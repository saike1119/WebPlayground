<?php
include_once('db_def.php');

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
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
<h1>お野菜管理<img src="./img/vegetable_main.png" alt="logo" width="50" height="50"></h1>
<ul class="globalNav">
    <li class="active">
        <a href="http://192.168.33.10/vegetable_home.php">
            <strong>ホーム</strong>
            <span>home</span>
        </a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable_add.php">
            <strong>お野菜追加</strong>
            <span>add</span>
        </a>
    </li>
    <li>
        <a href="#">
            <strong>お野菜削除</strong>
            <span>delete</span>
        </a>
    </li>
</ul>
<form action="insert_vegetable.php" method="post">
    野菜名: <input title="名前を入力" type="text" name="name"/><br>
    価格: <input title="価格を入力" type="text" name="price"/><br>
    概要: <input title="概要を入力" type="text" name="description"/><br>
    <input type="submit" value="野菜を追加する"/>
</form>
<?php foreach ($res as $value): ?>
    <div class="contentBox">
        <p><span><?php echo '野菜名: ' . $value['name']; ?></span></p>
        <p><span><?php echo '値段: ' . $value['price']; ?></span></p>
        <p><span><?php echo '概要: ' . $value['description']; ?></span></p>
    </div>
<?php endforeach; ?>
</body>
</html>