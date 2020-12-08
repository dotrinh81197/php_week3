
<?php
include "CircleComparator.php";

$circleOne = new Circle("circleOne", 2);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
$compare = $circleComparator->compare($circleOne, $circleTwo);
if ($compare == 1) {
    echo "Hình tròn 1 lớn hơn hình tròn 2";
} else if ($compare == -1) {
    echo "Hình tròn 1 bé hơn hình tròn 2";
} else {
    echo "Hai hình tròn bằng nhau";
}
