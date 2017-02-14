<?php

$numbers = trim(fgets(STDIN));

function getAverage ($sum) {
    $average = 0;
    for ($i = 0; $i < strlen($sum); $i++) {
        $average += $sum[$i];
    }
    $average /= strlen($sum);
    return $average;
}

$average = getAverage($numbers);

while ($average < 5) {
    $numbers .= '9';
    $average = getAverage($numbers);
}

echo $numbers;