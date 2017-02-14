<?php

class Person {
    private $name;
    private $age;

    function __construct(string $name,int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getAge()
    {
        return $this->age;
    }
}
class Family extends Person{



    public function __construct(string $name, int $age)
    {   parent::__construct($name, $age);
    }


}
$countInput = trim(fgets(STDIN));

$dataArrays = array();
$dataArraysFamily = array();
for ($i = 0; $i < $countInput; $i++) {
    $newData = trim(fgets(STDIN));
    $newData = explode(" ", $newData);
    $name = $newData[0];
    $age = intval($newData[1]);
    $dataArray = new Family($name, $age);
    $dataArrays[] = $dataArray;
}

function sortAge ($a, $b) {
    return strnatcmp($b->getAge(), $a->getAge());
}

usort($dataArrays, 'sortAge');
$counts = 0;
foreach ($dataArrays as $datas) {
    $counts++;
    if ($counts == 1) {
        echo $datas->getName() . " " . $datas->getAge();
    }

}