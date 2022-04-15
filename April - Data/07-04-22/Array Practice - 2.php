<?php


// Array_Keys - give us the key of the array

$a = array("Age"=>"23","Name"=>"Ritesh");
print_r(array_keys($a));


echo "<br>";


//Array Map function is send the array to the user defined function.


function myfunc($a){

    return ($a*$a);
}

$b = array(2,5,7,8);

print_r(array_map("myfunc",$b));


echo "<br>";
//array_merge this function merges a more than one array in one array.


$c = array("R"=>1,"B"=>2,"C"=>50);
$d = array("A"=>1,"D"=>2,"C"=>10);

print_r(array_merge($c,$d));


echo "<br>";
// Array_merge_recursive this function works when both or more array have same kay then this function insted of override,this makes the value.


$c = array("R"=>1,"B"=>2,"C"=>50);
$d = array("A"=>1,"D"=>2,"C"=>10);

print_r(array_merge_recursive($c,$d));


echo "<br>";
// Multisort this function gives the sort of the from A-Z but in numeric array this will start from 0 index.


$a = array("E","D","F","W","X","Y","Z","O","P","Q");
array_multisort($a,SORT_DESC);
print_r($a);


echo "<br>";
// Pad function will insert the specified number of elements;

$e = array("E","D");
print_r(array_pad($e,10,"Ritesh"));

echo "<br>";
// POP function will remove last element from the array

$f = array("E","D","F","W");
array_pop($f);
print_r($f);


echo "<br>";
// Array_Product this function will give the  product of the array.

$g = array("2","5");
echo array_product($g);


echo "<br>";
// Array_Push this function will insert the element in the last of the array.

$h = array("2","5");
array_push($h,3,5,6,7);
print_r($h);

echo "<br>";
// rand() - this function will give the keys in the output. If specified then only these can be shown there.

$i = array(1,2,3,4,5);
$keys = array_rand($i,4);
echo $i[$keys[0]]."<br>";
echo $i[$keys[1]]."<br>";
echo $i[$keys[2]]."<br>";
echo $i[$keys[3]];


echo "<br>";
//The array_reduce function sends the array the user defined function;

function red($x,$z){
    return $x."-".$z;
}

$j = array("Ritesh","Suraj","Golu");

print_r(array_reduce($j,"red"));


echo "<br>";
//The array_reduce function sends the array the user defined function;

//replace function replace the values in the array.

//array_replce_recursive function will replce the values without the overriding the values and gives the value of the same key.

//recursive means it can't ignore the values or override it.

//array reverse function will reverse the array from the last elements.


echo "<br>";
//Array search this function will help us to search the keys by values.



$search = array("Name"=>"Ritesh","Age"=>"23");
echo array_search("23",$search);


echo "<br>";
//Shift function will remove the first element from the array and return it in the output.

$shif = array(1,2,3,4,5,6);
array_shift($shif);
print_r($shif);

echo "<br>";

// array_unshift($shif);
// print_r($shif);

//slice function will return the selected elements.
//splice function will remove & replace with new array.
//array_sum function will sum of all the elements in the array.


#array_udiff - this function will send the array to the user defined function and gives the difference between 2 arrays.

function func($a,$b){

    if ($a===$b) {

    return 0;
}

return ($a>$b)?1:-1;

}

$dif = array("rit"=>"12","sur"=>"13","tej"=>"14");
$dif1 = array("rit"=>"14","sur"=>"15","tej"=>"16");

$differ = array_udiff($dif,$dif1,"func");

print_r($differ);

echo "<br>";



# array_udiff_uassoc() - this function will check keys and values with the user defined function for both has different function.

function myKey($k1,$k2){

    if ($k1===$k2) {  

        return 0;
   }

return ($k1>$k2)?1:-1;

}

function myValues($k1,$k2){

    if ($k1===$k2) {

        return 0;
   }
   
return ($k1>$k2)?1:-1;

}

$forkeys = array("K1"=>"1","K2"=>"2","KK3"=>"3");
$keys = array("K1"=>"1","K2"=>"5","KK3"=>"3");

$mykeys = array_udiff_uassoc($forkeys,$keys,"myValues","myKey");
print_r($mykeys);






?>