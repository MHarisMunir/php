<?php

$num = 10;
$result = $num % 2;

if($num % 2 == 0){
	echo"num is even";
} elseif($num % 2 != 0){
	echo "num is odd";
}

switch ($result) {
	case 0:
		echo "num is even";
		break;
	case 1:
		echo "num is odd";
		break;
	default:
		echo "nothing is num";
		break;
}

switch (true) {
	case $result == 0:
		echo "num is even";
		break;
	case $result == 1:
		echo "num is odd";
		break;
	default:
		echo "nothing is num";
		break;
}


?>
