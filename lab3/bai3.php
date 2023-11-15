<?php
//Bài 3
$chuoi = "082307";
$gio = substr($chuoi, 0, 2);
$phut = substr($chuoi, 2, 2);
$giay = substr($chuoi, 4, 2);

$ketqua = $gio . ":" . $phut . ":" . $giay;
$ketqua = chunk_split($ketqua, 3);
echo $ketqua;

//Bài 4
echo "<br>";
$chuoi = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";

$mang = explode("\n", $chuoi);

echo '<pre>';
var_dump($mang);
echo '</pre>';
?>