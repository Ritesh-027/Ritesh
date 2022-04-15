<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>



<?php

#Example of Global variable;

// $a = 10;
// $b = 150;

// function hey(){

// $GLOBALS["c"] = $GLOBALS["a"] + $GLOBALS["b"];

// }
// hey();
// echo $c;


#SERVER [example] - this contain information about header, path and script locations.

// echo $_SERVER["HTTP_USER_AGENT"];

// echo $_SERVER['SCRIPT_URI'];



#REQUEST - this variable collect the data after submitting the form.
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}




?>

</body>
</html>