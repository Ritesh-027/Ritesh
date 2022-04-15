<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Table.css">
    <title>Document</title>
</head>
<body>
<table class=tab >
    
<?php

$num = 10;
// $i = 1;

for ($j=1; $j <= 10; $j++) { 
         
    echo "<tr class = ro>"; 
        
    for ($i=1; $i<=10; $i++) { 

        if ($j === 8) {
            continue;
        }

        $table = $i * $j;

        echo "<td class=row> $i * $j = $table </td>";        
                               
    }

    echo "</tr>";

}
?>

<table>

</body>
</html>