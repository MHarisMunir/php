<?php

function calculator($a ,$b, string $operation = "all"){
    switch($operation){
        case "add":
            $result = $a + $b;
            echo "add result : ".$result;
            break;
        case "sub":
            $result = $a - $b;
            echo "sub result : ".$result;
            break;
        case "mul":
            $result = $a * $b;
            echo "mul result : ".$result;
            break; 
        default:
            $result = $a + $b;
            echo "add result : ".$result;
            
            $result = $a - $b;
            echo "sub result : ".$result;

            $result = $a * $b;
            echo "mul result : ".$result;
    }
};

calculator(2,3,"add");
echo "<br>";
calculator(2,3,"sub");
echo "<br>";
calculator(2,3,"mul");
echo "<br>";
calculator(2,3);

?>