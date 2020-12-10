<?php
include "ArrayListBasic.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add('a');
echo "<pre>";
var_dump($listInteger);
// lấy ra phần tử ở vị trí index 
echo 'Phần tử ở vị trí 1 có giá trị : ' . $listInteger->get(1) . "</br>";
echo 'Phần tử ở vị trí z có giá trị : ' . $listInteger->get('z');
