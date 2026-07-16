<?php

echo 'Hello </br>';

$bien_1 = 5;

echo $bien_1 . '</br>';

//hằng số 

define('name', 'thuanng');

echo name . '</br>';

$a1 = 'test_1';
$a2 = "test_2: $a1";

echo $a2 . '</br>';

$bien1 = true;

echo $bien1 . '</br>';

$mang = [
    'name' => 'thuanng',
    'age' => 20,
    'address' => 'HCM'
];
echo $mang['name'] . '</br>';
echo $mang['age'] . '</br>';
echo $mang['address'] . '</br>';

$mang2 = ['thuanng', 20, 'HCM'];
echo $mang2[0] . '</br>';
echo $mang2[1] . '</br>';
echo $mang2[2] . '</br>';

echo '<pre>';
print_r($mang2);
echo '</pre>';

$c = 10;
$d = "10";

var_dump($c == $d); // true
var_dump($c === $d); // false

echo "</br>test foreach</br>";
foreach ($mang as $key => $value) {
    echo $key . ' : ' . $value . '</br>';
}