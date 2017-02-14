<?php

class Number {
    private $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function getNumber():int
    {
        return $this->number;
    }

    public function getLastDigits()
    {
        $lastDigit = substr($this->getNumber(), -1);
        switch ($lastDigit) {
            case 0 :
                return $lastDigit = "zero";
                break;
            case 1 :
                return $lastDigit = "one";
                break;
            case 2 :
                return $lastDigit = "two";
                break;
            case 3 :
                return $lastDigit = "three";
                break;
            case 4 :
                return $lastDigit = "four";
                break;
            case 5 :
                return $lastDigit = "five";
                break;
            case 6 :
                return $lastDigit = "six";
                break;
            case 7 :
                return $lastDigit = "seven";
                break;
            case 8 :
                return $lastDigit = "eight";
                break;
            case 9 :
                return $lastDigit = "nine";
                break;
            default:
                throw new Exception("Invalid input");
        }

    }

}



$input =  intval(trim(fgets(STDIN)));

$digits = new Number($input);

echo $digits->getLastDigits();