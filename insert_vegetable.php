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

if(!empty($_POST['vegetable'])) {
    $vegetable = $_POST['vegetable'];
}else{
    echo '値を入力してください！';
}

?>
<br>
<div class="btn">戻る</div>
</body>
</html>
