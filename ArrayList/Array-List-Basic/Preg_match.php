<?php
$pattern = '/^[0-9]+$/';
$subject = '0979306603';
if (preg_match($pattern, $subject, $matches)) {
    echo 'Đây là một dãy số';
}

$subject = "freetuts.net";
$pattern = '/net/';
preg_match($pattern, $subject, $matches);
echo '<pre>';
print_r($matches); // array [0] = 'net';
echo '</pre>';

$subject = "website hoc mien phi https://freetuts.net rat la hay";
$pattern = '/(http)(.+)(net)/';
preg_match($pattern, $subject, $matches);
echo '<pre>';
print_r($matches);
/*Array
(
    [0] => https://freetuts.net
    [1] => http
    [2] => ://freetuts.
    [3] => net
)*/
echo '</pre>';

$subject = "Chuỗi cần lấy là [chuỗi này] mọi người";
$pattern = '/\[(.+)\]/';
if (preg_match($pattern, $subject, $matches)) {
    // kêt quả matches sẽ có 2 phần tử
    // phần tử thứ nhất là toàn regex =>  "[chuỗi này]"
    // chuỗi thứ 2 là kết quả đoạn regex bên trong dấu () => "chuỗi này"
    echo "kết quả toàn chuỗi là: <br/>";
    echo '<pre>';
    print_r($matches);
    echo '</pre>';

    echo "Kết quả muốn lấy là: <br/>";
    echo $matches[1];
}
