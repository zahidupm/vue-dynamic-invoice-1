<?php
class Employee {
private $name;
private $salary;

public function __construct($name, $salary) {
$this->name = $name;
$this->setSalary($salary);
}

public function setSalary($salary) {
if ($salary >= 0) {
$this->salary = $salary;
} else {
throw new Exception("Salary cannot be negative.");
}
}

public function getSalary() {
return $this->salary;
}

public function getName() {
return $this->name;
}
}

// Example usage:

$employee1 = new Employee("John Doe", 5000);
echo $employee1->getName() . " has a salary of $" . $employee1->getSalary() . "\n";

$employee2 = new Employee("Jane Smith", -2000); // This will throw an exception