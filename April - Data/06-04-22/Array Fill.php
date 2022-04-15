<?php

// Filling the values in array with fill function; it adding the values with  the index number.

$a = array("R","S","T");
print_r(array_fill(0,5,"Superb"));


echo "<br>";

// Assigning the keys to values with key_fill_keys function;

$keys = array("a","b","c","d","e","f");
print_r(array_fill_keys($keys,"Good"));

echo "<br>";


// Using the array filter for array

// $var = 10;
function myfilter($var){

    return ($var%2==0);
}

$flt = array(1,2,3,4,5,6,7,8,9,10,12,14,16,18,20);

print_r(array_filter($flt,"myfilter"));


echo "<br>";


// Fliping the keys and values through array_flip function


$flp = array("Want"=>"4","Great"=>"5");

print_r(array_flip($flp));


echo "<br>";


// Array_Intersect - using this function for catching the same value 


$r = array("A"=>"Zen","B"=>"Wix","C"=>"Rox");
$s = array("A"=>"Zen","E"=>"Wix","D"=>"Rox");

print_r(array_intersect($r,$s));


echo "<br>";

// Assoc - Means this has a value and key;
// Array_Intersect_Assoc - means this function can check key and value both if this found same then it will return the same array;


$f = array("Trend"=>"A","Smell"=>"S","Beutiful"=>"Shefali");
$g = array("Trend"=>"A","Smell"=>"S","Beutiful"=>"Shefu");

print_r(array_intersect_assoc($f,$g));



echo "<br>";


// UASSOC - means - it has user defined function, keys and values to return.
// Array_intersect_uassoc - this function will return the key and value which has same only with compare with user defined function



function mycheck(){

if ($i===$j) {

    return 0;

} return ($i>$j)?1:-1;

}

$q = array("a"=>"1","b"=>"2","c"=>"2");
$w = array("a"=>"1","b"=>"2","c"=>"2");

$check = array_intersect_uassoc($q,$w,"mycheck");

print_r($check);

echo "<br>";


?>