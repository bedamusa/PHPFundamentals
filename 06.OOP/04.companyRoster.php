

<?php
class Employee {
    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;
    public function __construct(string $name,
                                float $salary,
                                string $position,
                                string $department,
                                string $email = 'n/a',
                                int $age = -1) {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;

    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return int
     */
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
    $salary = $newData[1];
    $position = $newData[2];
    $department = $newData[3];

    if (count($newData) > 5) {
        $email = $newData[4];
        $age = intval($newData[5]);
        $employee = new Employee($name, $salary, $position, $department, $email, $age);
    }
    else if (count($newData) > 4) {
        if (is_numeric($newData[4])) {
            $age = intval($newData[4]);
            $employee = new Employee($name, $salary, $position, $department, 'n/a', $age);
        }
        else {
            $email = $newData[4];
            $employee = new Employee($name, $salary, $position, $department, $email);
        }
    }
    else {
        $employee = new Employee($name, $salary, $position, $department);
    }
    $dataArrays[] = $employee;
}

$averageSalaries = [];

foreach ($departments as $department => $count) {
    $averageSalary = 0;
    foreach ($dataArrays as $employee) {
        if ($employee->getDepartment() == $department) {
            $averageSalary += $employee->getSalary();
        }
    }
    $averageSalary /= $count;
    $averageSalaries[$department] = $averageSalary;
}
var_dump($averageSalaries);



