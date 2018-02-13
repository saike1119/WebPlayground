<?php

$vegetable = '';

if(!empty($vegetable)) {
    $vegetable = $_POST['vegetable'];
}else{
    echo '値を入力してください';
}