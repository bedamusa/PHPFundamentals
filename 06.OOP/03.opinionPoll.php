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
$countInput = trim(fgets(STDIN));

$dataArrays = array();
for ($i = 0; $i < $countInput; $i++) {
    $newData = trim(fgets(STDIN));
    $newData = explode(" ", $newData);
    $name = $newData[0];
    $age = intval($newData[1]);

    if ($age > 30) {
        $dataArray = new Person($name, $age);
        $dataArrays[] = $dataArray;
    }
}

function sortNames ($a, $b) {
    return strcmp($a->getName(), $b->getName());
}



usort($dataArrays, 'sortNames');
$counts = 0;
foreach ($dataArrays as $datas) {
    $counts++;
    if ($counts < $countInput -1 ) {
        echo $datas->getName() . " - " . $datas->getAge() . "\r\n";
    }else {
        echo $datas->getName() . " - " . $datas->getAge();
    }
}

