<?php

$inputSpeed = trim(fgets(STDIN));
$inputWhere = trim(fgets(STDIN));

$limit = getLimit($inputWhere);
$infraction = getInfraction($inputSpeed, $limit);
$overSpeed = $inputSpeed - $limit;
if ($infraction) {
    if ($overSpeed >= 0 && $overSpeed < 20 ) {
        echo "speeding";
    }else if ($overSpeed > 20 && $overSpeed <= 40) {
        echo "excessive speeding";
    }else if ($overSpeed > 40){
        echo "reckless driving";
    }
}

function getLimit ($zone) {
        switch ($zone) {
            case 'motorway' :
                $speedLimit = 130;
                break;
            case 'interstate' :
                $speedLimit = 90;
                break;
            case 'city' :
                $speedLimit = 50;
                break;
            case 'residential' :
                $speedLimit = 20;
                break;
            default :
                echo "Not a Valid Input";
                $speedLimit = 1000;
                break;
        }
        return $speedLimit;
}
function getInfraction ($speed, $limit) {
        $overSpeed = $speed - $limit;
        if ($overSpeed < 0) {
            $result = false;
        }else {
            $result = true;
        }
    return $result;
}