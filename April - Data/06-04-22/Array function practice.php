<?php

// Array function - how to create a array

$creat = array("dog","cat",fish);
print_r($creat);

// changing a arrays case - work only in associative array;

echo"<br>";


$up = array("hey"=>"25","ritesh"=>"50","happy"=>"200");

print_r(array_change_key_case($up,CASE_UPPER));


echo"<br>";


// Spliting an array into chunks;

$b = array("Apple","Ball","Cat","Dog");
print_r(array_chunk($b,2));



// Getting the data in a column; #Issue is function is not working.

echo "<br>";

$c = array(

    array(
        "Id" => 123,
        "Name" => "Ritesh",
        "Address"=>"Ahmedabad",
    ),
    array(
        "Id"=> 212,
        "Name"=> "Jenifer",
        "Address"=>"Surat",
    ),
    array(
        "Id"=> 312,
        "Name"=>"Steffy",
        "Address"=>"Valsad",
    ),
    array(
        "Id"=> 412,
        "Name"=>"Zen",
        "Address"=>"Mumbai",
    ),

);

$ids = array_column($c,"Address");
print_r($ids);

echo "<br>";


// Combining the 2 arrays.


$d = array("A","B","C");
$e = array(10,20,30);

$comb = array_combine($d,$e);
print_r($comb);

echo "<br>";


// counting the values of the array

$f = array("Rit","Rit","Rit","stim","stim");

print_r(array_count_values($f));

echo "<br>";


// Getting check the value's difference only between 2 Arrays;


$g = array("Rit"=>100,"Tejas"=>"500","Suraj"=>"600");
$h = array("Rit"=>100,"Tejas"=>"500","Suraj"=>"200",);

print_r(array_diff($g,$h));

echo "<br>";

// Getting check the value & key difference between 2 Arrays;

$i = array("Rit"=>1000,"Hiren"=>"500","Suraj"=>"600");
$j = array("Rit"=>1000,"Tejas"=>"500","Suraj"=>"60",);

print_r(array_diff_assoc($i,$j));


echo "<br>";



// Checking the different key from the 2 arrays

$k = array("Rit"=>1000,"Tejas"=>"500","Shefali"=>"600");
$l = array("Rit"=>1000,"Tejas"=>"500","Suraj"=>"60",);

print_r(array_diff_key($k,$l));


echo "<br>";


// Checking the difference between 2 arrays with User-Defined function

function checkfun($a1,$a2){
if ($a1===$a2) {
    return 0;
}
return ($a1>$a2)?1:-1;
}

$m = array("Rit"=>1000,"Teja"=>"500","Shefali"=>"786");
$n = array("Rit"=>1000,"Tejas"=>"500","Shefu"=>"600",);
$p = array("Rit"=>1000,"Tejas"=>"500","Shefu"=>"600",);

$o = array_diff_uassoc($m,$n,$p,"checkfun");
print_r($o);

echo "<br>";


// Checking the key difference with User-Defined function


function keycheck($b1,$b2){
    if ($b1===$b2) {
        return 0;
    }
    return ($b1>$b2)?1:-1;
    }
    
$q = array("R"=>"100","S"=>"200");
$r = array("R"=>"100","T"=>"200");

print_r(array_diff_uassoc($q,$r,"keycheck"));


?>