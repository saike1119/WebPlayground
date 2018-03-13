<?php

$AA = $_POST['AA'] * 4 * 2;
$A = $_POST['A'] * 3 * 2;;
$B = $_POST['B'] * 2 * 2;
$C = $_POST['C'] * 2;
$D = $_POST['D'];
$F = $_POST['F'];
$unit = $_POST['unit'];

if ($D >= 0) {
    $D = 0;
}
if ($F >= 0) {
    $F = 0;
}

$sumPoints = $AA + $A + $B + $C + $D + $F;
$GPA = $sumPoints / $unit;

if ($GPA >= 3.5) {
    echo 'あなたのGPAは' . $GPA . 'です。優秀です！';
} else {
    echo 'あなたのGPAは' . $GPA . 'です。普通です。';
}