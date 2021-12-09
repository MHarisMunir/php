<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>
	<table>
		<tr>
			<td>Num</td>
			<td>Even</td>
			<td>Odd</td>
		</tr>
    <h1>Exercise 1: Display Odd and Even Numbers</h1>
    <?php
    include "maxnum.php";
    
    	for($num = 1; $num <= MAXNUM_new\MAX; $num ++){
    		$value = $num % 2;
    		echo "<tr>";
    		echo "<td>$num</td>";
    		if($value == 0){
    			echo "<td>Yes</td>";
    			echo "<td>No</td>";
    		}else{
    			echo "<td>No</td>";
    			echo "<td>Yes</td>";
    		}
    		echo "</tr>";
    	}
    echo "</table>";
    ?>		
</body>
</html>

