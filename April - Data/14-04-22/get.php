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
	<link rel="stylesheet" type="text/css" href="Textarea.css">
	<title>Form</title>
</head>
<body>

<?php

$nameErr = $mailErr = $commentErr = "";
$name = $mail = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST['name'])) {
		$nameErr = "Write your name here!!";
	} else {

		$name = test_data($_POST['name']);

		if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
			$nameErr = "Only letters and white space allowed";
		}

	}

	if (empty($_POST['mail'])) {
		$mailErr = "Write your mail here!!";
	} else {

		$mail = test_data($_POST['mail']);

		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
			$mailErr = "Invalid email format";
		}
	}

	if (empty($_POST['comment'])) {
		$commentErr = "Comment here!!";
	} else {
		$comment = test_data($_POST['comment']);
	}

	if (strlen($comment) > 50) {
		$commentErr = "Word limit is 50";
		if (strlen($comment) > 50) {
			$comment = "";
		}

	} else {
		if (!preg_match("/^[a-zA-Z-' 0-9]*$/", $comment)) {
			$commentErr = "Special Characters are not allowed";
		}
		$comment = $_POST['comment'];
	}

}

function test_data($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;

}

?>


<h1>Form Validation</h1>

<form method="post" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> >

<span class="span">Required Fields*</span><br><br>
Name: <br><input type="text" name="name"><span class="span">* <?php echo $nameErr ?></span><br><br>
Mail: <br><input type="mail" name="mail"><span class="span">*<?php echo $mailErr; ?> </span><br><br>
<textarea rows="5" cols="20" name="comment"></textarea><span class="span">*<?php echo $commentErr; ?></span><br>
<input type="submit" name="submit"><br>

</form>


<?php

echo "<br>";
echo $name;
echo "<br>";
echo $mail;
echo "<br>";
echo $comment;

?>

</body>
</html>

