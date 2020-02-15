<?php
require_once 'Arr.php';

$arr = new Arr();

$arr->add(2);
$arr->add(5);
$arr->add(4);
$arr->add(8);
$arr->add(3);

$somevalue = new AvgHelper();



echo $somevalue->getAvg([4,7,2,7,8,4]);
