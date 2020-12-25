<?php
function revertToBinary($number)
{
    $objNumber = new SplStack();
    while ($number !== 0 && $number > 0) {
        $objNumber->push($number % 2);
        $number = floor($number / 2);
    }

    foreach ($objNumber as $key => $value) {
        echo $value;
    }
}

revertToBinary(10);
