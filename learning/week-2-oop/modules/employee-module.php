<?php
class Employee{
    public $name = null;
    public function __construct() {
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        print($this->name);
    }
}
$emp = new Employee();

?>