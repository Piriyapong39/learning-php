<?php
include_once __DIR__.'/modules/programer-module.php';
include_once __DIR__."/modules/accountant-module.php";
include_once __DIR__."/modules/company-module.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h2>Hi this is php oop concept</h2>
    <?php 
        try{
            Company::get_company_info();
        
            echo "<hr/>";
    
            # new programer obj
            $programmer = new Programer("Piriyapong", 30000, "3 years");
            $programmer->getEmpProgramer();
    
            echo "<hr/>";
    
            # new accoutant obj
            $accountant = new Accoutant("Natutitato", 20000, "Nothings");
            $accountant->getAccountantData();
        }catch(Exception $e){
            echo "Error: ".$e->getMessage()."<br/>";
        }
    ?>
</body>
</html>