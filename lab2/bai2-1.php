<?php
// Bài 1: Mảng
$color = array('red','green','white');
print_r($color);
echo "<br>";
echo $color[0];
echo "<br>";
$age = array();
$age[0] = 10;
$age[1] = 20;
$age[3] = 30;
print_r($age);
echo "<br>";
// Bài 2: Mảng
$salaries = array(
    "mohammad" => 2000,
    "quadir" => 1000,
    "zara" => 500
);
echo "Salaries of mohammad is: ".$salaries['mohammad']."<br/>";
echo "Salaries of quadir is: ".$salaries['quadir']."<br/>";
echo "Salaries of zara is: ".$salaries['zara']."<br/>";
// Bài 3: constant
define('LOCATOR',"/locator");
define('CLASSES',LOCATOR."/code/classes");
define('FUNCTIONS',LOCATOR."/code/functions");
define('USERDIR',LOCATOR."/user");
?>