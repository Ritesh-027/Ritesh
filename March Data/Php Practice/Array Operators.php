<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- Array Operator -->

<?php

// Union operator

$Array = array("R"=>0,"I"=>1);
$Array1 = array("T"=>2,"E"=>3);

print_r($Array + $Array1);

?>

<!-- // PHP Conditional Assignment Operators -->

<br>
<br>

<?php

$x = 100;
$y="100";

$z = ($x===$y) ? "both are same with value"  : "not the same";

echo "the value of $z";

?>


<!-- Null coalscing Operator -->

<br>
<br>
<?php

$G = $_GET["G"] ?? 'Its exist' ?? "It dosen'";
echo $G;

?>






    
</body>
</html>