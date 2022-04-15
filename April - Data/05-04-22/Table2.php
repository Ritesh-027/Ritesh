<!-- <!DOCTYPE html>
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
    
for ($i=1; $i <= 10; $i++) { 
         
    echo "<tr class = ro>";

    if ($i==8) {
        continue;   
    }
        
    for ($j=1; $j<=$num; $j++) { 
        $table = $i * $j;
        echo "<td class=row> $j * $i = $table </td>";          
    }

    echo "</tr>";

}




?>

</table>
</body>
</html> -->