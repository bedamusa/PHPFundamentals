<?php
//$inputNumbers = trim(fgets(STDIN));
$inputNumbers = "1 2 3 3";
$inputArray = explode(" ", $inputNumbers);
$sumsToLeft = 0;
$sumsToRight = 0;

for ($i = 0; $i < count($inputArray) /2 ; $i++) {
    if ($i == 0) {
        $leftSum = $inputArray[$i] + $inputArray[$i+1];
        $sumsToLeft = $leftSum;
        $rightSum = $inputArray{$i - (count($inputArray) -1)} + $inputArray[$i - (count($inputArray) -2)];
        $sumsToRight = $rightSum;
        for ($j = count($inputArray); $j > count($inputArray) / 2; $j--) {
            $sumsToRight = $inputArray[$i];
        }
    }
    $sumsToLeft = $inputArray[$i];


    echo "$sumsToLeft <br />";
}

echo "<pre>";
print_r($sumsToLeft);
echo "</pre>";
echo "<pre>";
print_r($sumsToRight);
echo "</pre>";