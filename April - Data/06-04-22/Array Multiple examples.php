<?php

// Checking the key exist or not in the array with key_exist function,

$key = array("Name"=>"Ritesh","ID"=>"111","UID"=>"10101011");

if (array_key_exists("Name",$key)) {

    echo "Yes key is there";
}
else {
        echo "Not present man!!!";
}


echo "<br>";



// with array key function we know that how many keys are present in the array

$yey = array("Name"=>"Ritesh","ID"=>"111","UID"=>"10101011","No"=>"2020201111111");

print_r(array_keys($yey));



echo "<br>";


// with the map function we can send the each function to the user defined function

function mul($num){

    return ($num+$num);
}

$m = array(2,3,4,4,5,5,5656,5757);

print_r(array_map("mul",$m));


?>