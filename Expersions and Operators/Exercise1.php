<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 1: How to Use the Operators</h1>

    <h2>Add two numbers using Arithmetical Operators:</h2>
    <?php
    $num1 = 10;
    $num2 = 20;
    echo $total = $num1 + $num2; 
    ?>

    <h2>Find Student passed or failed using Conditional Operatos:</h2>
    <?php
    $sub1 = 10;
    $sub2 = 20;
    $passing = 20;
    $total = $sub1 + $sub2;
    echo ($total >= $passing) ? "Pass" : "Fail"
    ?>

    <h2>Show a number is even or odd using Comparison Operators:</h2>
    <?php
    $number = 10;
    $result = $number % 2;
    echo ( $result == 0) ? "Even Number" : "Odd Number";
    ?>

    <h2>Check if user has access and login rights using Logical Operators:</h2>
    <?php
    $hasLogin = true;
    $hasAccess = true;
    echo ($hasLogin && $hasAccess) ? 'User has Access' : 'User does not has Access';
    ?>

    <h2>Assign a integer value and increment by 10 using Assignment Operator:</h2>
    <?php
    $number = 10;
    $number += 10;
    echo $number;
    ?>

</body>
</html>

