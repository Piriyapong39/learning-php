<?php 

# import class employee

include_once __DIR__.'/employee-module/employee-module.php';

class Programer extends Employee {

    #attibutes
    private $experience;
    private $bonus_income = 300;

    # constructor
    function __construct($name, $salary, $exp){
        try{
            parent::__construct(); 
            $this->setEmp($name, $salary);
            $this->setProgramerData($exp);
        }catch(Exception $e){
            throw $e;
        }

    }

    # method set experience
    public function setProgramerData($exp){
        $this->experience = $exp;
        $this->department = "Programer";
    }

    # method get employee programer data
    public function getEmpProgramer(){
        $this->get_emp();
        echo "Experience = ".$this->experience."<br/>";
    }

    # required method that come from parent class
    function description(){
        echo "Duty: Solve problem from user";
    }

    # required method thaht come from parent class
    function bonus(){
        echo "Bonus = ".$this->bonus_income."<br/>";
    }
}

?>