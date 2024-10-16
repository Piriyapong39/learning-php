<?php

final class Company{

    # Attributes
    public $company_name = "Sirivatana interprinter";
    static public $address = "Bang-Wua";
    
    # function constructor 
    function __construct(){
    }

    # method get company info
    static public function get_company_info() {
        try {
            $instance = new self(); 
            $nums = 1;
            if ($nums !== 0) {
                throw new Exception("Problem in get_company_info");
            }
            echo "Company name = " . $instance->company_name . "<br/>";
            echo "Address = " . Company::$address . "<br/>";
        } catch (Exception $e) {
            throw $e;
        }
    }
    
}
?>