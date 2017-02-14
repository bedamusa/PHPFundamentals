<?php

$inputNumber = trim(fgets(STDIN));
$operations = trim(fgets(STDIN));
$operations = explode(", ", $operations);

function operant ($num, $operations) {
    switch ($operations) {
        case 'chop' : return $num / 2;
        case 'dice': return sqrt($num);
        case 'spice' : return $num + 1;
        case 'bake' : return $num * 3;
        case 'fillet' : return $num * 0.8;
           }
    return $num;
}

foreach ($operations as $operator) {
    $inputNumber = operant($inputNumber, $operator);

    echo $inputNumber ."\r\n";
}