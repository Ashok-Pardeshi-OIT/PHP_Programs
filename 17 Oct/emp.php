<?php
class Employee {
    private $id;
    private $name;
    private $department;
    private $salary;

    public function __construct($id, $name, $department, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function display() {
        echo "ID: " . $this->id . "\n";
        echo "Name: " . $this->name . "\n";
        echo "Department: " . $this->department . "\n";
        echo "Salary: " . $this->salary . "\n";
    }
}

class Manager extends Employee {
    private $bonus;

    public function __construct($id, $name, $department, $salary, $bonus) {
        parent::__construct($id, $name, $department, $salary);
        $this->bonus = $bonus;
    }

    public function getTotalSalary() {
        return $this->getSalary() + $this->bonus;
    }

    public function display() {
        parent::display();
        echo "Bonus: " . $this->bonus . "\n";
        echo "Total Salary: " . $this->getTotalSalary() . "\n";
    }
}

// Creating 6 Manager objects
$managers = [
    new Manager(1, "Alice", "HR", 50000, 5000),
    new Manager(2, "Bob", "IT", 60000, 7000),
    new Manager(3, "Charlie", "Finance", 55000, 6000),
    new Manager(4, "David", "Marketing", 52000, 8000),
    new Manager(5, "Eve", "Sales", 58000, 7500),
    new Manager(6, "Frank", "Operations", 53000, 6500)
];

// Finding the manager with the maximum total salary
$maxManager = $managers[0];
foreach ($managers as $manager) {
    if ($manager->getTotalSalary() > $maxManager->getTotalSalary()) {
        $maxManager = $manager;
    }
}

// Displaying the details of the manager with the maximum total salary
echo "Manager with the maximum total salary:\n";
$maxManager->display();
?>