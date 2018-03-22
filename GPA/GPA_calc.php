<?php

$AA = $_POST['AA'] * 4 * 2;
$A = $_POST['A'] * 3 * 2;;
$B = $_POST['B'] * 2 * 2;
$C = $_POST['C'] * 2;
$D = $_POST['D'];
$F = $_POST['F'];
$unit = $_POST['unit'];

//TODO バリデートを追加する
if ($D >= 0) {
    $D = 0;
}
if ($F >= 0) {
    $F = 0;
}

$sumPoints = $AA + $A + $B + $C + $D + $F;
$GPA = $sumPoints / $unit;

if ($GPA >= 3.0) {
    echo 'あなたのGPAは' . $GPA . 'です。優秀です！';
} elseif ($GPA < 3.0 || $GPA >= 2.0) {
    echo 'あなたのGPAは' . $GPA . 'です。普通です。';
}else{
    echo 'あなたのGPAは' . $GPA . 'です。もう少し頑張りましょう！';
}