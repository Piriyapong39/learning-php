<?php

abstract class Employee{
    
    # All attributes
    private $name;
    protected $department;
    private $salary;
    
    # Constructor
    function __construct(){  
    }

    #method set employee data
    public function setEmp($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    # method get employee data
    public function get_emp(){
        echo "Name = ".$this->name."<br/>";
        echo "Department = ".$this->department."<br/>";
        echo "Salary = ".$this->salary."<br/>";
    }

    # abstract method description
    abstract public function description();

    # abstract method bonus
    abstract public function bonus();
}
?>