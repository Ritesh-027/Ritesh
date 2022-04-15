<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

#Get a Timestamp;
$date = date_create();
echo date_timestamp_get($date);

echo "<br>";

#Set a Timestamp;
$date = date_create();
date_timestamp_set($date, 1371803321);
echo date_format($date, "U = Y-m-d H:i:s");

echo "<br>";

#date_timezone_get();

$date = date_create(null, timezone_open("Europe/Paris"));
$tz = date_timezone_get($date);
echo timezone_name_get($tz);

echo "<br>";

$date = date_create(null, timezone_open("Europe/Paris"));
$st = date_timezone_get($date);
echo timezone_name_get($st);
echo "<br>";

#date-this function gives the date.

echo date("l");
echo "<br>";
echo date("h:i:s a");
echo "<br>";
echo date("m-Y-d h:i:s a");

echo "<br>";

print_r(gettimeofday(2));

echo "<br>";

print_r(localtime(time(true)));

?>