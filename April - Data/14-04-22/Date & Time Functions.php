<?php

#checkdate function; - This function checks a date whethere its right or not.

echo var_dump(checkdate(11, 27, 1950));

echo "<br>";

# date_add() - this function help us to add date ,time,second and year;

$date = date_create("2050-05-27");
$end = date_add($date, date_interval_create_from_date_string("1 Year"));
echo date_format($date, "Y-m-d l");

#date_create_from_format() - from this we can modify the date format;

echo "<br>";
$DC = date_create_from_format("j-m-y", "27-May-1999");
echo date_format($DC, d - y - m);

#date_creat - it's return a new format of the date.;
echo "<br>";

$creat = date_create("1999-05-27");
echo date_format($creat, "d-m-Y");

// date_date_set() - This function taking a current date and then format it with specified format;
echo "<br>";

$c = date_create(); //it will take a current Date & Time;

date_date_set($c, "27-05-2022");

echo date_format($c, "y-m-d");

//date_default_timezone_set() - Set Timezone;
echo "<br>";

//date_default_timezone_get() - Get a Timezome;
echo "<br>";

date_default_timezone_set("America/New_York");
echo date_default_timezone_get();

//date_default_timezone_get() - Get a Timezome;
echo "<br>";

//date_diff- this function calculate the diffrence between 2 dates.
echo "<br>";

$d1 = date_creat("2000-05-27");
$d2 = date_creat("2000-10-28");
$diff = date_diff($d1, $d2);
echo $diff->format("%R%a days");

echo "<br>";

// $date1 = date_create("2013-03-15");
// $date2 = date_create("2013-12-12");
// $diff = date_diff($date1, $date2);
// echo $diff->format("%R%a days");

//date format -This function returns a specified format.

//date_interval_create_from_date_string() - with this function we can add date/year in the current date.

//date_interval_format() - with this function we can check the interval diff.

//date_modify - with this function we can modify the date.

// $dc1 = date_create("2022-05-01");
// date_modify($dc1, "+3 days");
// echo date_format($dc1, "y-m-d");

?>


