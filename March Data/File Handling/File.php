<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



 <!-- #This method is taking data after submitting the form. --> -->

Welcome &#128526;! - <?php echo $_POST["name"]; ?><br>
Your Number is : <?php echo $_POST["number"]; ?><br>
Your Mail ID : <?php echo $_POST["mail"]; ?><br>
Comment : <?php echo $_POST["Comment"];?><br>

<!-- / This html function protect us to malicious script and destroy it. -->

<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> 

<?php


$name = $number = $mail = $Comment = "";

if($_SERVER["REQUEST_METHO"] == "POST"){

$name = 


}









?>
</body>
</html>