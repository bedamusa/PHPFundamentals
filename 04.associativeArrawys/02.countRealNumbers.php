<?php
//$lineToread = "8 2.5 2.5 8 2.5";
$lineToread = trim(fgets(STDIN));
$lineArray = explode(" ", $lineToread);
$arrayCount = array_count_values($lineArray);
ksort($arrayCount);

foreach ($arrayCount as $key => $value) {
    echo "{$key} -> {$value} times\n";
}