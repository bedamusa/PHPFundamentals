<?php
$firsetLine = trim(fgets(STDIN));
$secondLine = trim(fgets(STDIN));
$firstArray = explode(" ", $firsetLine);
$secondArray = explode(" ", $secondLine);
$firstCount = count($firstArray);
$secondCount = count($secondArray);
$short = min($firstCount, $secondCount);

$leftCounter = 0;
$rightCounter = 0;
for ($i=0; $i<$short; $i++) {
    if ($firstArray[$i] == $secondArray[$i]) {
        $leftCounter++;
    }else if ($firstArray[$firstCount - $i - 1] == $secondArray[$secondCount - $i -1]) {
        $rightCounter++;
    }else {
        break;
    }
}
echo max($leftCounter, $rightCounter);