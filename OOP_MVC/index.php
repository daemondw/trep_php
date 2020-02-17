<?php
require_once 'Date.php';

$date = new Date('2025-12-31');

echo $date->getYear();  // выведет '2025'
echo $date->getMonth(); // выведет '12'
echo $date->getDay();   // выведет '31'
