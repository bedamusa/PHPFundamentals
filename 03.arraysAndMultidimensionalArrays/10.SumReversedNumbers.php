<?php
$firsetLine = trim(fgets(STDIN));
$firstArray = explode(" ", $firsetLine);
$sum = 0;
foreach ($firstArray as $value) {
    $value = strrev($value);
    $sum += $value;
}
echo $sum;