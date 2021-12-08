<?php

     //Sample 1

    $some_boolean_condition = FALSE;
    if ( $some_boolean_condition ) {
        echo 'This is a If Block' . PHP_EOL;
        echo 'This is a True Condition' . PHP_EOL;
    } else {
        echo 'This is a Else Block' . PHP_EOL;
        echo 'This is a False Condition' . PHP_EOL;
    }


    $one_more_boolean_condition = FALSE;
    if ( $some_boolean_condition && $one_more_boolean_condition) {
        echo 'This is a If Block' . PHP_EOL;
        echo 'This is a True Condition' . PHP_EOL;
    } else {
        echo 'This is a Else Block' . PHP_EOL;
        echo 'This is a False Condition' . PHP_EOL;
    }

?>


<!doctype html>
<html>
<head>
    <title>
        if else Statements
    </title>
</head>
<body>

<?php if ($some_boolean_condition || true) { ?>

    <h1>This is a True Condition Block.</h1>

<?php } else { ?>

    <h1>This is a False Condition Block</h1>

<?php } ?>

</body>
</html>

<?php

  
    $input1 = "Some Text from User"; 


    $input2 = 34;

    //Condition 1
    if( !is_null($input1)  ) {
        echo '$input1 is not empty';
    } else {
        echo '$input1 is empty value';
    }

    //Condition 2
    if( isset($input1) &&  !is_null($input1)  ) {
        echo '$input1 is not empty';
    } else {
        echo '$input1 is empty value';
    }

    //Condition 3
    if($input1 != ""  ) {
        echo '$input1 is not empty';
    } else {
        echo '$input1 is empty value';
    }


    if( !empty($input1) ) {
        echo '$input1 is not empty';
    } else {
        echo '$input1 is empty value';
    }

    if( $input2 >= 34 ){
        echo 'input2 is greater than 34';
    } else {
        echo 'input2 is less than 34';
    }

?>


<?php
    //Sample 3
    //3) if condition statement without braces.

    $some_boolean_condition = FALSE;
    if( $some_boolean_condition )
        echo 'This is true' . PHP_EOL;
    else
        echo 'This is false' . PHP_EOL;

    if( $some_boolean_condition ) echo 'This is true' . PHP_EOL; else echo 'This is false' . PHP_EOL;

    //Recommended Practice
    if( $some_boolean_condition ) {
        echo 'This is true' . PHP_EOL;
    } else {
        echo 'This is false' . PHP_EOL;
    }

?>

<?php


    $result = "Passed";

    if( $result === "Passed") {
        echo "Student has Passed the Exam" . PHP_EOL;
    } else {
        echo "Student has Not Passed the Exam" . PHP_EOL;
    }
?>
