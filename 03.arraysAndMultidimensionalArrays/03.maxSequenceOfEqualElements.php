<?php
//$inputNumbers = trim(fgets(STDIN));
$inputNumbers = "5 1 1 5 2 2 6 3 3";
$inputArray = explode(" ", $inputNumbers);
$currentS = 1;
$maxS = 1;
$arrayKeys = reset($inputArray);
$bestNumber = $arrayKeys;
for ($i = 0; $i < count($inputArray) - 1; $i++) {
    if ($inputArray[$i] == $inputArray[$i + 1]) {
        $currentS++;
    }else {
        $currentS = 1;
    }
    if ($currentS > $maxS) {
        $maxS = $currentS;
        $bestNumber = $inputArray[$i];
    }
}
for ($j = 0; $j < $maxS; $j++) {
    echo " $bestNumber";
}
/*
print_r($maxS);
echo "</pre>";
echo "<pre>";
print_r($bestNumber);
echo "</pre>";
*/