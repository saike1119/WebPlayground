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
<ul class="globalNav">
    <li>
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
        <a href="http://192.168.33.10/vegetable_delete.php">
            <strong>お野菜削除</strong>
            <span>delete</span>
        </a>
    </li>
</ul>
<p>・削除する野菜の管理IDを入力してください</p>
<form action="delete_vegetable.php" method="post">
    管理ID: <input title="管理IDを入力" type="text" name="id"/><br>
    <input type="submit" value="野菜を削除する"/>
</body>
</html>