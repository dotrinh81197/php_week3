<?php
include_once 'LinkList.php';

$nodeList = new LinkList();
$nodeList->insertFirst('toa 3');
$nodeList->insertFirst('toa 2');
$nodeList->insertFirst('toa 1 ');
$nodeList->insertLast('toa 4 ');
$nodeList->insertLast('toa cuối ');
echo 'Total node : ' . $totalNode = $nodeList->totalNodes();
$linkList = $nodeList->readList();
echo implode('-', $linkList);

echo "<pre>";
print_r($nodeList);
echo "</pre>";
