<?php

// array_unique this function will remove the duplicate from the array.

$uary = array(1,1,2,3,4,5,5);
print_r(array_unique($uary));

echo "<br>";
#array_shift - this function will remove the first element of  the array.
#array_unshift - this function will insert a new element to the array

$sft = array("1"=>"Ritesh","2"=>"Suraj");
// print_r(array_shift($sft));
array_unshift($sft,"shefali");
print_r($sft);


echo "<br>";
#array_values - this function return with all the values.
#array_walk - this function runs each array element to the user defined function.
#array_walk_recursive - this function work with depper array like array inside array.

function col($key,$val){
    echo "The key is $val & value is $key <br>";
}

$color = array("R"=>"Red","B"=>"Black","C"=>"Cyan");
$color1 = array($color,"B"=>"Blue","P"=>"Purple");

array_walk_recursive($color1,"col");

echo "<br>";

// arsort() - this function sort the associative array values from descending order.
// asort() - this function sort the associative array values from the ascending order.

$name = "Ritesh";
$lastName = "Gaikwad";
$age = "22";

$result = compact("name","lastName","age");
print_r($result);

echo "<br>";
#compact() - this function will create a array from the variables.
#In_array - this function is use to search a specific element from a array.

$sary = array("Joy","Hunny","clen");

if (In_array("Joy",$sary)) {

     echo "value is found in the array";
}
else {
    echo "code is not found";
}

echo "<br>";

// Key() - this function returns a current elements key.

$ky = array("Joy"=>"454545","Hunny","clen");

echo "First elements key is :".key($ky);


echo "<br>";


// Krsort - this function is for keys to make order descending.


$des = array("Joy"=>"1","Hunny"=>"2","clen"=>"3");

krsort($des);

foreach ($des as $key => $value) {
    echo "Key is :".$key.", Value is :".$value;
    echo "<br>";
}

echo "<br>";

// ksort -  this function is using for ascending order with key.

$ASC = array("1"=>"Ritesh","2"=>"hunny","3"=>"cirus");
ksort($ASC);

foreach ($ASC as $key => $value) {
    echo "Key is :".$key.",,,,,,Value is :".$value;
    echo "<br>";
}

echo "<br>";

// list - this function is use to assign list of variables to array.

$mylist = array("Cart","Add","Remove","Check");

list($c,$a,$r,$ch) = $mylist;

echo "$c & $a";

// natsort & natcasesort - this function is using for sequencing.

$temp_files = array("temp15.txt","Temp10.txt","temp1.txt","Temp22.txt","temp2.txt");

natsort($temp_files);
echo "Natural order: <br>";
print_r($temp_files);
echo "<br />";

natcasesort($temp_files);
echo "Natural order case insensitve: <br>";
print_r($temp_files);


echo "<br>";
#next() - this function is gives the second element from the array.


$nx = array("Cart","Add","Remove","Check");

echo next($nx);


echo "<br>";
#POS() - this function gives the current elements value;


$alies = array("Cart"=>"Hey I m his value","Add","Remove","Check");
echo pos($alies);

echo "<br>";
#POS() - this function gives the current elements value;


#pre() - this function gives the previews element of the array.

#range is creates an array how many you wants to in the programs.
#range - this function is creates an array from the given range.


$number = range(0,4);
print_r($number);

echo "<br>";
#reset function moves at the beggining element.


// rsort this function use to settle a descending order for array.
$hey = array("D","F","E","A","B","C");
rsort($hey);
print_r($hey);

echo '<br>';
#shuffle - this function randomize the elements place after refreshing the page.
$hey = array("D","F","E","A","B","C");
shuffle($hey);
print_r($hey);


echo '<br>';
// sizeof - this function use to count the number of elements in array.
$ey = array("D","F","E","A","B","C");
echo sizeof($ey);

echo '<br>';
// sizeof - this function use to count the number of elements in array.

$sort = array("D","F","E","A","B","C");
sort($sort);
print_r($sort);


echo "<br>";
#uasort - this function is used in associative array for ascending order.

// $rt = array("D"=>"2","F"=>"4","E"=>"15","A"=>"8","g"=>"1008","j"=>"898");
// uasort($rt,"ort");

// function ort($r,$t){

//     if ($r===$t) {
//         return 0;

//     }return ($r>$t)?1:-1;
// }

// foreach ($rt as $key => $value) {

//     echo "key is :".$key.", value is :".$value."<br>";
// }

// echo "<br>";



// uksort - this function use to sort a key in ascending order with a user defined function.


function ort($r,$t){
    if ($r===$t) {
        return 0;
    }return ($r>$t)?1:-1;
}

$sort = array(1,2,3,4,5,6);
usort($rt,"ort");

foreach ($sort as $key => $value) {
    echo "key is :".$key.", value is :".$value."<br>";
}
echo "<br>";

#usort - this function is use to sort an array in ascending order with a user defined function.

function my_sort($x,$y){
    if ($x==$y) {
        return 0;     
    }
    return($x<$y)?1:-1;
}

$my_ary = array(2,3,4,5,6,7,8);

usort($my_ary);

$arylength = count($my_ary);

for ($i=0; $i < $arylength; $i++) { 
    echo $my_ary[$i];
    echo "<br>";
}


?>  
