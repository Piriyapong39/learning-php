<?php 

function calSalary($salary){
    $totalIncome = 0;
    if($salary <= 15000){
        $totalIncome = $salary * 0.95;
    }else{
        $totalIncome = $salary - 750;
    }
    return $totalIncome;
}

?>