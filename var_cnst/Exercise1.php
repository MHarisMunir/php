<!doctype html>
<html>
<head>
    <title>
        Variables
    </title>
</head>
<body>

    <h1>Exercise 1: Create and Display Variables</h1>

    <h2>String Variable:</h2>
    <?php
        $name = "Haris";
        echo "$name"
    ?>
    <hr>

    <h2>Integer Variable:</h2>
    <?php
        $age = 23;
        echo $age
    ?>
    <hr>

    <h2>Print Variable from Function:</h2>
    <?php
        function print_var(){
            $lang = "PHP";
            echo $lang;
        }
    print_var();
    ?>
    <hr>

    <h2>Static Variable:</h2>
    <?php
        function print_s(){
            static $count = 1;
            $count = $count + 1;
            echo $count;
        }
    print_s();
    print_s();
    print_s();
    ?>
    <hr>

    <h2>Global Variable:</h2>
    <?php
    global $haris;
    $haris = "HARIS";
    function print_global(){
            global $haris;
            echo $haris;
        }
    print_global();
    ?>
    <hr>

    <h2>Super Global Variable:</h2>
    <?php
    echo $GLOBALS['haris'];
    ?>
    <hr>

    <h2>Variables of Variables:</h2>
    <?php
    $name = "Haris Munir";
    $gender = "name";
    echo $gender;
    echo "${$gender}";
    ?>
</body>
</html>

