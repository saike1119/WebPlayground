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
    <h1>お野菜管理<img src="./img/vegetable_main.png" alt="logo" width="50" height="50"></h1>
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
</ul>
<h2>料理の検索確認</h2>
<form action="#" method="post">
    管理検索(ID): <input title="管理IDを入力" type="text" name="id"/><br>
    <input type="submit" value="野菜を確認する"/>
</form>
<br>
<?php

include_once('db_def.php');

$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);

if ($mysqli->connect_error) {
    echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
    exit();
}

$mysqli->set_charset('utf8');

if (empty($_POST)) {
    $id = null;
} else {
    $id = $_POST['id'];
}

if (empty($id)) {
    echo 'idを入力してください' . "</br>";
} elseif (!is_numeric($id)) {
    echo 'idを数字で入力してください' . "</br>";
} else {
    $sql = "SELECT * FROM `vegetable` WHERE id = $id";
    $res = $mysqli->query($sql);
    $rows = mysqli_num_rows($res);
    if ($rows == 0) {
        echo "該当データはありません";
    } else {
        foreach ($res as $value) {
            echo '管理ID[' . $value['id'] . ']の料理ステータス' . "<br/>";
            echo '野菜名:' . $value['name'] . "<br/>";
            echo '値段:' . $value['price'] . "<br/>";
            echo '概要:' . $value['description'] . "<br/>";
        }
    }
}

$mysqli->close();

?>

<h2>料理の更新</h2>
<form action="#" method="post">
    管理ID: <input title="管理IDを入力" type="text" name="id"/><br>
    野菜名: <input title="名前を入力" type="text" name="name"/><br>
    価格: <input title="価格を入力" type="text" name="price"/><br>
    概要: <input title="概要を入力" type="text" name="description"/><br>
    <input type="submit" value="野菜を更新する"/>
</form>
<br>

</body>
</html>