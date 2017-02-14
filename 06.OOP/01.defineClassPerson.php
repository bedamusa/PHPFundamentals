<?php

class Person {
    private $name;
    private $age;

    function __construct(string $name,int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}

$person = new Person("Stamat" , 32);
echo(count(get_object_vars($person)));