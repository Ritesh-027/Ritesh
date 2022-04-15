<?php

//date_create() - this function creates a date.

$date = date_create(27 - 05 - 2022);
echo date_format($date, "y-m-d");

echo "<br>";

//date_time_set() - this function sets a time and date.

$date = date_create("1999-05-27");

date_time_set($date, 7, 15);
echo date_format($date, "Y-m-d h:i:s a");

echo "<br>";

//date(); - with this function we can creates a date,month and year and the day.

echo date("l") . "<br>";
echo date("Y") . "<br>";
echo date("M") . "<br>";
echo date("D");

echo "<br>";

//getdate() - we can get the date.

$getdate = getdate();
echo "Today's date is :" . $getdate[mday] . "-", $getdate[mon] . "-", $getdate[year] . " & Timing is :", $getdate[hours] . ":", $getdate[minutes] . ":", $getdate[seconds];

echo "<br>";

//gettimeofday - this function gives the current timing of the day.

print_r(gettimeofday(true));

echo "<br>";

echo date("H:i a"); //gettin hourse/minutes and am -ante meridiem and pm -post meridiem.
echo "<br>";
echo date("D"); //gettin a current date.
echo "<br>";
echo date("M"); //getting a current month.
echo "<br>";
echo date("Y"); //getting a current year.

echo "<br>";
//mktime - this function return a unix timestamp.

echo date("M-d-y", mktime(05, 27, 1999));

echo "<br>";

echo date("M");

echo "<br>";

echo timezone_version_get();
echo "<br>";

echo date('t');

echo "<br>";

//gettin a last day of the month.[t] - Means the number of days in the given month

$last = date("t", strtotime("last day"));
print_r($last);

echo "<br>";

//example 1

$lastDateOfNextMonth = strtotime('last day of next month');

$lastDay = date('d/m/Y', $lastDateOfNextMonth);

print_r($lastDay);

echo "<br>";

//gettin a first & last day of the month with date() and strtotime() function;

$lastMonth = date("d F", strtotime('first day of previous month'));
$nextMonth = date("d F", strtotime('last day of next month'));
echo $lastMonth . "<br>";
echo $nextMonth . "<br>";

echo "<br>";

$lastDay = date('t', strtotime('last month'));

print_r($lastDay);

?>