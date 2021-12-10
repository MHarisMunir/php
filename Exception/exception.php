<?php
//Raise and catch Exception

function divide($x , $y):int{
    if($y <= 0){
        throw new Exception("Exception Caught: Divided by zero");
    }
    return $x / $y;

}

try{
    $result = divide(1,2);
    echo $result;
}

catch(Exception $e){
    echo $e-> getMessage();
}

//Throw custom Exception

function custom_exception_handler($exception) {
    echo "Uncaught exception: " , $exception->getMessage(), "\n";
}

function add($a, $b){
    if($a <= 0){
        throw new Exception("Add method has input param as 0.");
    }
    $result = $a + $b;
    return $result;
}

//Show with and without the below line.
set_exception_handler('custom_exception_handler');
add(0, 2)


?>