<?php

if(!empty($_POST['vegetable'])) {
    $vegetable = $_POST['vegetable'];
    var_dump($vegetable);
}else{
    echo '値を入力してください';
}