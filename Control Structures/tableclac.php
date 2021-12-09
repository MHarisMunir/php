<table align="left" border="1" cellpadding="3" cellspacing="3">

<?php
include "TCconfig.php";
$num = TC\T;


for ($a = 1; $a <= $num; $a ++){
	for($b=1; $b <= 10; $b ++){
		$mul = $a * $b;
		echo "<tr>";
		echo "<td>$a</td> <td>*</td> <td>$b</td> <td>=</td> <td>$mul</td>"."<br>";
		echo "</tr>";
	}
	echo "<hr>";

}


?>
</table>