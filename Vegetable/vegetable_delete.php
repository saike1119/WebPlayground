<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="header">
    <h1>お野菜管理<img src="../img/vegetable_main.png" alt="logo" width="50" height="50"></h1>
</div>
<ul id="nav">
    <li>
        <a href="http://192.168.33.10/vegetable/vegetable_home.php">ホーム</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable/vegetable_add.php">お野菜追加</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable/vegetable_delete.php">お野菜削除</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable/vegetable_update.php">お野菜更新</a>
    </li>
    <li>
        <a href="http://192.168.33.10/vegetable/vegetable_profile.php">利用者情報</a>
    </li>
    <li>
        <a href="#">ログアウト</a>
    </li>
</ul>
<h2>削除する野菜の管理IDを入力してください</h2>
<form action="delete_vegetable.php" method="post">
    管理ID: <input title="管理IDを入力" type="text" name="id"/><br>
    <input type="submit" value="野菜を削除する"/>
</form>
</body>
</html>