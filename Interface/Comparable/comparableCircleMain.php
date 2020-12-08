<?php
include "comparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);

if ($circleOne->compareTo($circleTwo) == 1) {
    echo "Hình tròn  1 lớn hơn  hình tròn 2";
} else if ($circleOne->compareTo($circleTwo) == -1) {
    echo "Hình tròn  1 bé hơn  hình tròn 2";
} else {
    echo "2 hình tròn  bằng nhau";
}
