<?php

#array_uintersect function compare only values and return the matches with user-defined funtion.

function inter($a,$b){

if ($a===$b) {
    return 0;
}

return ($a>$b)?1:-1;
}
$ary = array("Name"=>"Jon","Age"=>"25","Live"=>"africa");
$ary1 = array("Name"=>"Zon","Age"=>"25","Live"=>"africa");

$ary3 = array_uintersect($ary,$ary1,"inter");
print_r($ary3);


echo "<br>";
#array_uintersect_assoc() Function - this function will check keys and values both through the user defined function and return the matches.

// function uinterass($y,$z){

//     if ($y===$z) {
//         return 0;
//     }
    
//     return ($y>$z)?1:-1;
//     }
//     $ua = array("Name"=>"Jon","Age"=>"25","Live"=>"africa");
//     $ua1 = array("Name"=>"Jon","Age"=>"26","Live"=>"America");
    
//     $u3 = array_uintersect_assoc($ua,$ua1,"uinterass");

//     print_r($u3);
    
echo "<br>";

function ukey($y,$z){

    if ($y===$z) {
        return 0;
    }
    
    return ($y>$z)?1:-1;
    }

    function uvalue($y,$z){

        if ($y===$z) {
            return 0;
        }
        
        return ($y>$z)?1:-1;
    }
   
    $ua = array("Name"=>"Jon","Age"=>"25","Live"=>"africa");
    $ua1 = array("Name"=>"Jon","Age"=>"26","Live"=>"America");
    
    $u3 = array_uintersect_uassoc($ua,$ua1,"ukey","uvalue");

    print_r($u3);
    
// array_uintersect - this will check only value with userdefined function and return matches.
// array_uintersect_assoc - this function will check key and values with the userdefined function.
// array_uintersect_uassoc - this function will check keys and values with 2 user defined function first will be for keys and second one will be values.


?>