<?php

function add($a, $b):int{
    return $a + $b;
};

$c = add(10,20);
echo $c;

function print_even($limit):array{
    $b = [];
    for ($a = 1; $a <= $limit; $a++){
        if($a % 2 == 0){
            //echo "Even num is : $a";
            $b[] = $a;
            //echo "<br>";
        }
        
    }
    return $b;
};

$c = print_even(10);
print_r($c);


//Dynamic function

/*$add_values = "add";

echo add_values(10,20);*/

//anonymous functions

$addd = function($x, $y):int{
    return $x + $y;
};
echo $addd(1,2);

//how to use variabl einside closure
$content = "this is outside closure";
$out = function()use($content){
    echo $content;
};

$out();

//passing argument as reference
$result = 0;
$adddd = function($r, $s, &$result){
    $result = $r + $s;
};
$adddd(3,3,$result) ;
echo "output : " . $result;



?>

