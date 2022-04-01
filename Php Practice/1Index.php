<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Hey Welcome to PHP!!</h1>

<!-- PHP Syntax -->

<?php
echo "Great to see you here !!";
?>

<P><li><em>In PHP keywords, function,classes and user defined functions are not case-sensitive.</p>
<P><li><em>All variables are case sensitive.</p>

<!-- Variables -->

<P><li><em>Variables are "containers" for storing information.</p>
<P><li><em>Variables is start with $ sign in PHP</p>


<!-- declaring a Variables -->
<?php

$Ritesh = 27;
$Year = 1999;
$Birth = 15;

// Concatnation

$X = $Ritesh.$Birth.$Year;

// Addition

$X = $Ritesh+$Birth+$Year;

echo "$X"


?>

<P><li><em>Rules for a variable</p>

<li>It should start from the $ sign</li>
<li>Variable name must start with a letter or  _ [underscore]</li>
<li>Variable name cannot start with a number</li>
<li>Php variable can contian alpha - numeric and underscores</li>
<li>Variable names are case sensetive. [Means variable declaration and echo names should be same if not then php will consider it as a new variable.</li>


<!-- Variable scope -->

<li>PHP has a 3 types of variable scopes.</li>
<li>local, global and static</li>
<li>Global:- If a variable declared outside a function andits called a global scope.</li>

<!-- Example of global scope -->

<br>

<?php

$C = 5;

function pint() {

    echo "This is inside area of function and we have declared a variable outside the function and its know as global scope.";
}

pint ();

echo "It can only be accessed outside a function $C.!!  ";

?>

<!-- // Example of local scope -->
<br>
<br>
<?php

function pnt() {
    $D = 15;
    echo "This is inside area of function and we have declared a variable inside the function and its know as local scope. and it can only be accesed within the function $D only";
}

pnt ();

// Global Keyword : This keyword can call the variable inside the function of ouside variables.

?>

<?php

$E = 10000;

function pt() {

    global $E;
    echo "This is inside area of function and we have declared a variable inside the function and its know as local scope. and it can only be accesed within the function: $E only";
}

pt();

?>


<!-- // Examples: we can store all the global variables in array called $globals[Index], Index hold a variables names. -->

<br>
<br>

<?php
$R = 100;
$S = 200;

function rs() {

    // [Have to use global keyword in UPPERCASE ]

$GLOBALS['R'] = $GLOBALS['R'] + $GLOBALS['S']; 

}

rs();
echo $R

?>

<!-- PHP: Static Keyword this keyword will stay at the same value while calling a function every time.This var's value won't be changed when you add static key to the function -->

<?php

function ritz() {
    static $RZ = 500;
    echo $RZ;
    $RZ++;

}
ritz();
echo "<br>";
ritz();
echo "<br>";
ritz();
echo "<br>";
ritz();
echo "<br>";
ritz();
echo "<br>";

// the same value will call again and again

?>

<!-- PHP Data type -->
String :- "Hey I am a string and you have to write me in single or double quotes"
Integer :- I am coming with numbers only no matter that nagative or positive but not a decimal numbers.

VAR_DUMP(); - This function returns a data type with value.

Float :- It means which has a decimal point  in numbers. 

Boolean :- Its only shows that value is true or false.

Array :- It can stores a multiple values in one variable. array ("Volvo", "BMW","TATA");

Object :- 

<!-- Object Examples:- - Not clreared this topic have to look again// -->

<?php

class bike {
        function model(){
            $model_name = "Royal Enfield";
            echo "<br>", "Bike Model:",$model_name;

        }
}

$obj = new bike();
$obj-> model();
?>
<br>

<!-- PHP String functions-  -->

strlen() - Return the Length of a String

<?php

echo strlen("not understand the object function");

?>

<br>

<!-- // str_word_count() - Count Words in a String -->

<?php

echo str_word_count("Need to learn object data type");

?>
<br>
<!-- strrev() - Reverse a String -->
<?php

echo strrev("Ambulance");

?>

<br>

<!-- strpos() - Search For a Text Within a String -->
<!-- This will help us to find string's words position. and it will give us a number like indexing. -->

<?php
echo strpos("hey I am Ritesh", "I")
?>

<br>
<!-- str_replace() - Replace Text Within a String -->

<?php

echo str_replace("Hey", "Oyyyyyyyyy","Hey I am Ritesh");

?>
<br>


<!-- math function -->

<?php

// echo max(1,2,3,4,5,6,150,9,7); - this will return a max value

// echo abs(-8.150); this will return a absolute value of a number

// echo sqrt(64); - this function will return a squre root of a number.

// echo round(1.7515); This function will return a nearest value of number.

// echo rand(); this will generate a random numbers in browser.
// echo (rand(10,150)); this will creat a between numbers.

?>

<!-- Constants -->

<?php

// constant are global u can call it anywhere in the scope.
// Need to use a define() function for creating a constant variables.

// Syntax of constant

define("R","Wlcome here");
echo R;

?>

<br>

<!-- constant array -->
<?php

define("Can", ["red","blue","black"]);
echo Can[1];

?>
<br>
<!-- PHP operators -->

<!-- Arithmatic operators are used with the number and values. -->
<!-- Assignment operators are same as arithmatic but it's been using with = sign.  -->

PHP string operators: concatnation and appends,

$1 = 1 and $2 = 2,
$1.$2 = 3 
$1.=$2 = 3 - IT IS CALLED APPEND IN STRING OPERATION.


<!-- Comparision Operators -->

<br>
<br>

<?php

$a = 50;
$b = 50;

if ($a == $b) {
    echo "a is equal to b";
}else{
    echo "a is not equal to b";
}

?>

<br>

<?php

if ($a>$b) {
    echo "a is grater than b";
}else{
    echo "a is not greater than b";
}

?>

<br>

<?php

if ($a!=$b) {
    echo "a is not equal to b";
}else{
    echo "a is equal to b";
}

?>
<br>
<?php

if ($a<$b) {
    echo "a less than b";
}else{
    echo "a is not less than b";
}
?>
<br>

<?php

$a = 50;
$b = 60;

if ($a >= $b) {
    echo "a is great";
}else{
    echo "a is equal with b";
}

?>

<br>


<?php

$a = 70;
$b = 70;

if ($a <= $b) {
    echo "a is less than b";
}else{
    echo "a is not less than b";
}

?>


<!-- #PHP Increment / Decrement Operators -->

<br>
<!-- Pre-increment is addition a values to its variables. its adding the value first and than return a variable. -->

<?php

$n = 100;
echo ++$n;


?>
<br>

<!-- Post-increment is addition a values to its variables. its return a variable first and then adding a value -->
<?php

$n = 99;
echo $n++;

?>

<br>

<!-- Pre-Decrement is addition a values to its variables. its return a variable first and then adding a value -->
<?php

$n = 99;
echo --$n;

?>

<br>
<!-- post-Decrement is addition a values to its variables. its return a variable first and then adding a value -->
<?php

$n = 99;
echo $n--;
echo $n--;

?>

<br>

<?php

$a = 700;
$b = 700;

if ($a <= $b) {
    echo "a is less than b";
}else{
    echo "a is not less than b";
}

?>

<!-- #Logican operators -->
<br>
<br>

<!-- And operator's condition In this condition both need to be right if not then it will go with else section. -->

<?php

$w = 50;
$x = 30;

if ($w == 50 and $x == 30) {
    echo "condition is  right now go ahead !!";
}else{
    echo "condition is wrong you can't go ahead";
}

?>
<br>
<br>

<!-- or operator's condition In this condition any one need to be right if not then it will go with else section. -->

<?php

$w = 10;
$x = 30;

if ($w == 20 or $x == 20) {
    echo "condition is  right now go ahead !!";
}else{
    echo "condition is wrong you can't go ahead";
}

?>

<!-- #PHP - string operators - concatnation and appends -->
<br>
<br>


<?php

$txt = "Ritesh";
$txt1 = " Hunny";

$txt.=$txt1;
echo $txt;

?>

<!-- PHP array oprators -->

<br>
<br>

<?php

$arch = array("Red","Green","Blue");

print_r($arch);
?>

<br>
<br>

<?php

$arc = array("Red"=>"012","Green"=>"023","Blue"=>"034");

print_r($arc);


?>

<!-- PHP Conditional Assignment Operators -->

<!-- #Ternery operator -->
<br>
<br>

<?php

$num = 90;
$num1 = 100;

echo $do = $num == $num1 ? "right" : "wrong";

?>

<br>
<br>

<?php

class SayHello{
    function hello(){
        echo "how are you";
    }
}
$obj = new SayHello;
$obj->hello();


</body>
</html>