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

$x = array("Ritesh","Jay","Suraj","Vipul");
echo $x[0];
echo $x[1];
echo $x[2];
echo $x[3];
?>


<!-- Constant array -->

<!-- numeric array -->
<?php

define("Ritesh",["Red","Blue","Yellow"]);

echo Ritesh[2];

?>

<!-- associative array -->
<br>

<?php

$salaries  = array("Ritesh"=>  10500,"Jay"=>  200,"Vipul"=>1300);

echo "Ritesh's salary is " . $salaries["Ritesh"] . "<br>";
echo "Jay's salary is " . $salaries["Jay"] . "<br>";
echo "Vipul's salary is " . $salaries["Vipul"] . "<br>";

?>

<!-- Multi-Dimensional Array -->

<?php 

$score = array("Ritesh" => array("Math"=>70,"sci"=>60,"eng"=>1550,"PT"=>80),

"Vip" => array("Math"=>70,"sci"=>6660,"eng"=>50,"PT"=>80),

"Jay" => array("Math"=>70,"sci"=>60,"eng"=>50,"PT"=>80),

"Sur" => array("Math"=>70,"sci"=>60,"eng"=>50,"PT"=>80),

"Ritz" => array("Math"=>70,"sci"=>60,"eng"=>50,"PT"=>80),

"Jezz" => array("Math"=>10010,"sci"=>60,"eng"=>05,"PT"=>80)

);

echo "Jezz's Overall score in math: ";
echo $score["Jezz"]["Math"]."<br/>";

echo "Ritesh's Overall score in eng: ";
echo $score["Ritesh"]["eng"]."<br/>";

echo "Vip Overall score in sci: ";
echo $score["Vip"]["sci"]."<br/>";


?>




</body>
</html>