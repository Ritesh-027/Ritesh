<?php

// $str = ("Hello shefali","hello shefali");

echo strcoll("Hello shefali","Hello shefali");
// echo "strcoll";


echo "<br>";

// This function gives the count of words as per specified word.
echo strcspn("Hello World","d");

echo "<br>";
// this tag will ignore the html tags inside the string
echo strip_tags("<n>Hellow<br><\n><br>World");


echo "<br>";
// strip - its related all the function will remove tags,slashes and other things from the strings and will returns the plain  string.

echo "<br>";
    //This function gives the position of the word or character in to the string.
    $str = "Hey I m ritesh";
    echo stripos("Hey I m ritesh","I");

echo "<br>";

// $str1 = "2 Hey My Name is Ritesh";

// $str2 = "10 Hey My Name is Suraj";

// This function will check the strings as per natural algorithms. In computer sorting 10 is less than 2 and in natural algorithm its a vice-versa.

echo strnatcasecmp("2 Hey My Name is Ritesh","10 Hey My Name is Suraj");
echo "<br>";
echo strnatcasecmp("10 Hey My Name is Ritesh","2 Hey My Name is Suraj");


echo "<br>";

// strtr- this function replace the words from the given word in the string.
$change = "This is a Company";
echo strtr("This is a Company","a","D");

echo "<br>";


// With this function we can remove the string character with specified numbers.
$change = "This is a Company";
echo substr("This is a company",10);

echo "<br>";

// This function compare the 2 strings from specified number.

echo substr_compare("Hello world","Hello world",0);


echo "<br>";
// substr_count - this function count the words from the string and give the output of the repeated words.

echo substr_count("Hello Ritesh Hello world and My Hello Ritesh","Hello");


echo "<br>";

$str =  "hey. shef. r. u. going. collag.e daily.?";
echo ucfirst($str);

echo "<br>";

$str =  "hey. shef. r. u. going. collag.e daily.?";
echo ucwords($str);

echo "<br>";
//vfprintf- this function write a formated string to a specified outpur stream.

$str =  "hey shef r u going collage daily?";
echo wordwrap($str,10,"<br>");


?>