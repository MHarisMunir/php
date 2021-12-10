<?php
$path = "testfolder";
$value = scandir($path);

//sample 1
//var_dump($value);


//sample 2
foreach ($value as $val){
    if($val != "." && $val != ".."){
        var_dump($val);
    }
}

echo "<br>";

//sample 3
$diff = array_diff($value, ['.', '..']);
var_dump($diff);
echo "<br>";
foreach ($diff as $d){
    echo $d;
    echo "<br>";
}

?>