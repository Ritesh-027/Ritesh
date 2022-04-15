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

// $name = array("Ritesh","Suraj","Shefali","Anju");

// echo "$name[0] <br>";
// echo "$name[1] <br>";
// echo count($name);
// echo array_pop($name);	
// echo array_column($name);
// echo array_product($name);

// $age['Ritesh']="23";
// $age['Shefali']="22";
// $age['Tanvi']="18";
// $age=$value;
// echo $age.$value;


// $colors = array("red", "green", "blue", "yellow"); 
// // echo $colors[1];

// Indexed array means wihtout any symbol.
// Assciative array means => this sign with.
// Multi Dimensional array means to creat more than two properties.


#Multi-Dimensional Array......,

// $car = array(
//     "Swift" => array(1,"Swift",2),
//     "TATA" => array(2,"TATA",1),
//     "AUDI" => array(3,"AUDI",2)
// );

// print_r($car)."<br>";

// for ($row=0; $row< 3; $row++) { 
//     echo "<p><b> Row Number $row <b><p>";

//     for ($col=0; $col< 3; $col++) { 
        
//         echo $car[$row][$col]." ";
//         }


//         echo "<br/>";

// }


?>

<?php

#Trail 1 - Multi-dimensional  array;

// $Home = array(

//     1 => array("Mad","Kitchen","Bath"),
//     2 => array("cook","Kitchen","Bath"), 
//     3 => array("cook","machine","lib")
// );

// echo $Home[2];
?>

<?php

// $movie[0] = 'Shaolin Monk';
// $movie[1] = 'Drunken Master';
// $movie[2] = '<p>Shef love </P>';
// $movie[3] = 'Once upon a time in China';
// $movie[4] = 'Replacement Killers';

// echo $movie[1];
// echo $movie[2];
// echo $movie[3];
// echo $movie[4];

?>


<?PHP
?>


<?php

// $movie = array(0 => "Shaolin Monk",
//                1 => "Drunken Master",
//                2 => "American Ninja",
//                3 => "Once upon a time in China",
//                4 =>"Replacement Killers" );
// echo $movie[4];


$movies =array(

"comedy" => array("Pink Panther", "John English", "See no evil hear no evil"),
"action" => array("Die Hard", "Expendables"),
"epic" => array("The Lord of the rings"),
"Romance" => array("Romeo and Juliet")

);

asort($movies);

print_r($movies);


?>





</body>
</html>