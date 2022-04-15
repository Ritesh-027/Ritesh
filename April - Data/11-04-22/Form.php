<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form.css">
	<title></title>
</head>
<body>

<!-- Welcome : <?php echo $_POST['name'] ?><br>
Your Number is : <?php echo $_POST['number'] ?><br>
Your Mail Id : <?php echo $_POST['mail'] ?><br>
Comment : <?php echo $_POST['comment'] ?><br>
 -->

<!-- Defining a variables and keep it blank for validation -->

<?php

// will get a value from C.

$nameErr = $numberErr = $mailErr = $commentErr = "";
$name = $number = $mail = $comment = "";

//Condition for checking a method.

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["name"])) {

		$nameErr = "Name is required";

	} else {

		//checking a fields that its contain a values as specified or not.
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
			$nameErr = "Only letters and spaces are allowed";
		}
	}

	if (empty($_POST["number"])) {

		$numberErr = "Number is required";
	} else {

		$number = test_input($_POST["number"]);

		if (!preg_match("/^[0-9]\d/", $number)) {

			$numberErr = "Please enter only numeric values";
		}

	}

	if (empty($_POST["mail"])) {

		$mailErr = "Mail is required";

	} else {

		$mail = test_input($_POST["mail"]);
		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {

			$mailErr = "Type Valid mail";
		}

	}

	if (!empty($_POST['comment'])) {

		$comment = $_POST['comment'];

		if (strlen($comment) > 100) {

			echo $commentErr = "Length must be under 100";

		}

	}

}

//Function for checking/removing a data that whether it has a spaces or slashesh or special characters.

function test_input($data) {

	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>

<form method="post" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>>
<span class ="namerr"><h3>*Required Fields</h3></span>

Name: <input type="text" name="name">
<span class ="namerr">*<?php echo $nameErr; ?></span><br><br>

Phone: <input type="text" name="number">
<span class ="namerr">*<?php echo $numberErr; ?></span><br><br>

Mail ID: <input type="mail" name="mail">
<span class ="namerr">*<?php echo $mailErr; ?></span><br><br>

<textarea name="comment" rows="10" cols="30"></textarea><br>
<span class ="namerr">*<?php echo $commentErr; ?></span><br><br>

Male<input type="radio" name="gender" value="Male">
Female<input type="radio" name="gender" value="Female">
Other<input type="radio" name="gender" value="Other"><br><br>
<!-- <span class ="namerr">*<?php echo $genderErr; ?></span><br><br> -->


<input type="submit">

</form>

<?php
echo "<br>";
echo "<b>Please Review The Data</b>" . "<br>";
echo $name;
echo "<br>";
echo $number;
echo "<br>";
echo $mail;
echo "<br>";

?>


</body>
</html>



