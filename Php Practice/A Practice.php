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

// Checking the key in arrays that key exist or not;

$r = array("Name"=>"Ritesh","Game"=>"Pubg","Fun"=>"Golu");

if (array_key_exists("Game",$r))
{
    echo "It's exist in the array";

}else {

    echo "its not present in the array";
}

?>

</body>
</html>