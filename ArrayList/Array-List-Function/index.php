<?php
include_once 'Array_list.php';

$objMylist = new MyList(5);
$objMylist->add('Một');
$objMylist->add('Hai');
$objMylist->add('Ba');
$objMylist->insert(2, 'Bốn');
echo $objMylist->indexOf('Bốn');


echo "<pre>";
print_r($objMylist);
echo "</pre>";
$objMylist->sort();
echo "<pre>";
print_r($objMylist);
echo "</pre>";

echo "<hr>";
