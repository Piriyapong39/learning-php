<?php 

function greetUser(){
    echo "Hi user";
}
function sumaryTotal($a, $b){
    $sum = $a + $b;
    print($sum);
}

function checkMonth($i){
    switch($i){ 
        case 1: return "January";
            break;
        case 2: return "February";
            break;
        case 3: return "March";
            break;       
    }
}    
?>