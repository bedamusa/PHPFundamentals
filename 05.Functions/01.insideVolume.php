<?php

$input = trim(fgets(STDIN));
$inputarray = explode(", ", $input);
$inputCount = count($inputarray);
for ($i = 0; $i < $inputCount; $i += 3) {
    $x = $inputarray[$i];
    $y = $inputarray{$i + 1};
    $z = $inputarray[$i + 2];
    if (isVolume($x, $y, $z)) {
        echo "inside \n";
    }else {
        echo "outside \n";
    }
}

function isVolume ($x, $y, $z) {

    $x1 = 10; $x2 = 50;
    $y1 = 20; $y2 = 80;
    $z1 = 15; $z2 = 50;

    if ($x >= $x1 && $x <= $x2 ) {
        if ($y >= $y1 && $x <= $y2) {
            if ($z >= $z1 && $z <= $z2) {
                return true;
            }
        }
    }

    return false;

}


