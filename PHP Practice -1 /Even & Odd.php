<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// $a = 100;

// for($i=1; $i <= $a; $i++) { 
//     if ($i%2==0) {
//         echo "<br> $i++";
//     }else {
//         echo $i++;
//     }
// }



#Even and Odd number in one loop;

$a=50;
$even = "Even Numbers are : ";
$odd = "<br/> Odd Numbers are : ";

 for ($i=0; $i <=$a ; $i++) { 

     if ($i%2==0) {
        $even.=$i.",";
      
     } else {
         $odd.=$i.",";
     }
    }

   echo "$even.$odd"; 

   
    

#Even Number Program with for loop;#Even

// $e = 100;

// for ($i=0; $i <=$e ; $i++) { 
//     if ($i%2==0) {
//         echo "Even : $i <br>";
//     }    
// }

#Odd Number program with for loop#Odd

// $e = 100;

// for ($i=0; $i <=$e ; $i++) { 
//     if ($i%2==1) {
//         echo "Odd : $i <br>";
//     }    
// }



</body>
</html>