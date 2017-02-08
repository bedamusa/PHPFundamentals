<?php
//$arr = array_map('trim', explode(' ', fgets(STDIN)));
$arr = array_map('trim', explode(" ","7 7 7 0 2 2 2 0 10 10 10"));
$numbers = [];
foreach ($arr as $num) {
    if (!array_key_exists($num, $numbers)) {
        $numbers[$num] = 0;
    }
    $numbers[$num]++;
}
$best = -1;
$num = null;
foreach ($numbers as $number => $count) {
    if ($count > $best) {
        $best = $count;
        $num = $number;
    }
}
echo $num;