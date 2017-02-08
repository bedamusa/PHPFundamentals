<?php

$inputNumbers = trim(fgets(STDIN));
$countToRotate = trim(fgets(STDIN));

//$inputNumbers = "3 2 4 -1";
//$countToRotate = 2;
$inputArray = explode(" ", $inputNumbers);
$countInput = count($inputArray);
$lenghtArray = [];
$sum = array();
for ($rows = 0; $rows < $countToRotate; $rows++) {
    $inputArray = array_merge(array_splice($inputArray,-1), $inputArray);
    $lenghtArray[$rows] = $inputArray;

}
foreach ($lenghtArray as $key => $valueSub) {
    foreach ($valueSub as $id => $value) {
        if (!isset($sum[$id])) {
            $sum{$id} = 0;
        }
        $sum[$id] += $value;
    }
}
foreach ($sum as $sumValue) {
    echo " $sumValue";
}