<?php
$objStack = new SplStack();
$array = [1, 2, 3, 4, 5];
foreach ($array as $key => $value) {

    $objStack[] = $value;
}
echo "<pre>";
print_r($objStack);
echo "</pre>";
echo "<hr>";

foreach ($array as $key => $value) {
    $array[$key] = $objStack->pop();
}
echo "<pre>";
print_r($array);
echo "</pre>";
