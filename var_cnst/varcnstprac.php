<!doctype html>
<html>
<head>
    <title>
        Variables and Constants
    </title>
</head>
<body>

	<!-- Sample 1 -->
	<?php
		
		//Define a Variable
		$aboutme = "I am Srini and I love PHP Programming!";
		echo "<h1>About Me:</h1>";
		echo $aboutme; //Printing the Variable

	?>

	<!-- Sample 2 -->
	<?php
		//Change the Variable Value
		$aboutme = "Text is changed to PHP Now!";
		echo $aboutme;
	?>

	<hr>

	<!-- Sample 1 -->
	<h1>Define Strings</h1>
	<?php

		$name = "John, Smith";
		$message = "This is a String Message";
		echo $name . ": " . $message . "<br>";
		echo "$name: $message";
	?>

	<h1>Define Integers</h1>
	<?php
		$version = 7.3;
		echo "PHP Version is $version";
	?>

	<!-- Sample 2 -->
	<h1>Combine String and Integer</h1>
	<?php
		echo "$name: $message<br>";
		echo "name: $name<br>";
		$language = "PHP";
		echo $language . " version is " . $version . "<br>";
	?>

	<!-- Sample 3 -->
	<h1>Add Two Values</h1>
	<?php
		$firstvalue = 10;
		$secondvalue = 20;
		$total = $firstvalue + $secondvalue;

		echo "Total: " . $total;
	?>

	<hr>
	<h1>Variable Typing</h1>

	<?php
	$length = "10";
	$breath = 20;
	$area = $length * $breath;
	echo "Area: $area";
	?>

	<hr>
	<h1>Functions</h1>
	<?php
	function add() {

        //Function Body
        $firstvalue = 10;
        $secondvalue = 20;
        $total = $firstvalue * $secondvalue;

        echo "Total: $total"."<br>";

    }

    add();

    welcome_message();
    function welcome_message() {
        echo "Welcome to PHP Functions!";
    }
	?>

	<hr>

	<?php
    echo "<h1>Static Variables</h1>";

    function counter_static(){
        static $count = 1;
        echo $count . "<br>";
        $count = $count + 1;
    }

    counter_static();
    counter_static();
    counter_static();
    counter_static();
    counter_static();
    ?>
</body>
</html>

