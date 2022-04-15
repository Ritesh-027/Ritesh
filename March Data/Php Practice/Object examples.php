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

// class home{

//     function myHome()
//     {
//         echo "my home";
//     }
 
// }

// $My = new home;

// $My -> myHome();



// class Names{

// function All(){

//    echo "Hi!!!";

// }

// // }
// $Ritesh = new Names;
// $Ritesh -> All();


// $obj = new stdClass;
// $obj->Name="Ritesh <br>";
// $obj->age = "23 <br>";
// $obj->surname= "Gaikwad <br>";

// print_r($obj);

// array can be type cast

// $arry = array("Name"=>"Ritesh","Age"=>"23");

// $obj = (object)$arry;

// print_r($arry);


class student{

    public $name ="Ritesh";
    public $Age = 23;
    public $Roll= 20;
    public $sub="sci";

    public function details(){

        echo "Name :".$this->name,"<br>","Age : ".$this->Age,"<br>","Roll : ".$this->Roll;

    }
    
}

$X = new student();
echo $X->details();


?>


</body>
</html>