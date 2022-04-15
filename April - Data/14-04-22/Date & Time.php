<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

echo "Today is" . " " . date(m . y . d) . "<br>";
echo "Today is" . " " . date(l) . "<br>";
echo "<br>";
echo "Timing is " . date("H:i:s a");
echo "<br>";
echo "Timing is " . date("h:i:s a");
echo "<br>";
echo date_default_timezone_set("Asia/Kolkata");
echo "<br>";
echo date("H:i:s a");
echo "<br>";
// echo date_default_timezone_set("America/New_York");
echo "<br>";
echo date("H:i:s a");

echo "<br>";
$s = strtotime("5:30pm May 20 2010");
echo "Created date is " . date("d-m-y h:i:s a", $s);

$predict = strtotime("+3 days");
echo "<br>";
echo date("d - m - y h:i:s a", $predict);

echo "<br>";

#Printin a date with while loop!;

$date = strtotime("27th May");
$endate = strtotime("+10 Year");

while ($date < $endate) {

	echo date("D-M-Y", $date) . "<br>";
	$date = strtotime("+1 Year", "$date");
}

?>

</body>
</html>



