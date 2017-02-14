<?php

class Person
{
    private $name;
    private $age;

    function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;

        echo $this->name . " " . $this->age;
    }
}

$name = trim(fgets(STDIN));
$age = trim(fgets(STDIN));
$age1 = intval($age);

$person = new Person($name, $age1);