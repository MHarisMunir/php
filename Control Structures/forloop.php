<?php

for($num = 0; $num <=10; $num ++){
	
	$value = $num % 2; 
	if($value == 0){
		echo 'num is even'."<br>";
	}else{
		echo "num is odd"."<br>";
	}
}

?>