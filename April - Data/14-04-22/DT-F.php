<?php

// date_modify - this function modify the date with

$date = date_create("2013-05-01");
date_modify($date, "+365 days");
echo date_format($date, "Y-m-d");

echo "<br>";
print_r(date_parse(27 - 05 - 1999));

echo "<br>";

$date = date_create("2013-03-15");
date_sub($date, date_interval_create_from_date_string("1 days"));
echo date_format($date, "Y-m-d");

echo "<br>";
echo date("Y");

echo "<br>";

?>
