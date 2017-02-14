<?php
$inputPoints = trim(fgets(STDIN));
$inputPoints = explode(", ", $inputPoints);
$x1 = intval($inputPoints[0]);
$y1 = intval($inputPoints[1]);
$x2 = intval($inputPoints[2]);
$y2 = intval($inputPoints[3]);

function checker ($x1, $y1, $x2, $y2) {
    $cal = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));

    if ((int)$cal == $cal) {
        return $sum = "{{$x1}}, {{$y1}} to {{$x2}}, {{$y2}} is valid\n";
    } else {
        return $sum = "{{$x1}}, {{$y1}} to {{$x2}}, {{$y2}} is invalid\n";
    }

}
echo checker($x1, $y1, 0, 0);
echo checker($x2, $y2, 0, 0);
echo checker($x1, $y1, $x2, $y2);

