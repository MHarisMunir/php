<?php

$arr = [ 1, 2, 3 ];
var_dump($arr);
echo "<br>";
print_r($arr);
echo "<br>";

echo $arr[0]."<br>";
echo $arr[1]."<br>";
echo $arr[2]."<br>";

echo count($arr);

const a = 1;
echo "{$arr[a]}";

//for loop to iterate arrays
$count = 0;
foreach($arr as $values){
    echo $count . "=> " . $values ;
    echo "<br>";
    $count ++;
}

 //Associative array
 $arr = [ 1 =>"Muhammad", 2=>"Haris" , 3=>"Munir" ];
  foreach($arr as $key => $value){
    echo $key ."=>" . $value;
  }
  echo "<br>";
  print_r(array_keys($arr));
  echo "<br>";



// Exercise 1
$arr1 = [1 =>["M","U","H","A","M","M","A","D"], 2=>["H","A","R","I","S"]];

foreach ($arr1 as $key => $value) {
    echo $key;
    foreach($value as $values){
        echo $values; 
        echo "<br>";
    }
}

// Exercise 2


    $planets = [
        "planets" =>
            [
                "sun" => [ "temp" => "hot", "color" => "red" ],
                "moon" => [ "temp" => "cold", "color"  => "white" ],
                "earth" => [ "temp" => "normal", "color" => "blue" ]
            ]
    ];

    foreach($planets as $key => $planet){
        foreach($planet as $planetname => $planetdetails){
            foreach($planetdetails as $p => $v){
                echo $p."=>".$v;
                echo "<br>";
            }
        }
    }



?>