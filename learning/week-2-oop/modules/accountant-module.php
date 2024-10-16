<?php 
include_once __DIR__."/employee-module/employee-module.php";

class Accoutant extends Employee {

    # attibutes for accountant
    private $certificate;
    private $bonus_income = 500;

    # function construnctor
    function __construct($name, $salary, $certi){
        parent::__construct();
        $this->setEmp($name, $salary);
        $this->setAccountantData($certi);
    }

    # method set certification
    public function setAccountantData($certi){
        $this->certificate = $certi;
        $this->department = "Accountant";
    }

    # method get account data 
    public function getAccountantData(){
        $this->get_emp();
        echo "Certification = ".$this->certificate."<br/>";
    }

    # required method that come from parent class
    function description(){
        echo "Calculate income";
    }

    # required method that come from parent class
    function bonus(){
        echo "Bonus = ".$this->bonus_income."<br/>";
    } 
}
?>
