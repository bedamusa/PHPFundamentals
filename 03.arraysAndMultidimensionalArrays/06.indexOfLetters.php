<?php
//$inputString = strtolower(trim(fgets(STDIN)));
$inputString = strtolower("Abcz");
$inputArray = str_split($inputString);
    foreach ($inputArray as $value) {
        $sum = ord($value) - ord("a");
        echo "$value -> $sum  <br />";
    }
