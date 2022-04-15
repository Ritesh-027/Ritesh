<?php

echo str_replace("Ritesh", "Good Morning", "Hello Ritesh");
echo "<br>";
echo str_replace("Ritesh", "Ritesh, Good Morning!!", "Hello Ritesh");
echo "<br>";
echo strtolower("Hey Good Morning");
echo "<br>";
echo strtoupper("hey there is somethin new");
echo "<br>";
echo lcfirst("Hey There Is Somethin New") . "<br>";

echo Ucfirst("Hey There Is Somethin New");

$str = "Hi Good Morning";
echo "<br>";
print_r(explode(" ", $str));
$str = array("Hi", "Good", "Morning");
echo "<br>";
print_r(implode(" ", $str));

?>