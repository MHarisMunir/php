<!doctype html>
<html>
<head>
    <title>
        Constants
    </title>
</head>
<body>

    <h1>Exercise 1: Define and Display Constants</h1>
    <?php
    define("NAME","Haris");
    echo NAME
    ?>

    <h2>String Constant:</h2>
    <?php
    echo NAME
    ?>

    <h2>Integer Constant:</h2>
    <?php
    define("AGE",23);
    echo AGE;
    echo "<br>";
    echo constant('AGE');
    ?>

    <h2>Print Constant from Function:</h2>
    <?php
    function print_cnst(){
	    define("NAMEE","Munir");
	    echo NAMEE;
	}
	print_cnst()
    ?>

    <h2>Display Magic Constant:</h2>
    <?php
    echo __LINE__;
    echo __FILE__;
    ?>
</body>
</html>

