<?php

// addcslashes - this function is used to add backslashesh in the characters.

$str = addcslashes("Hello World","e");
echo $str;



echo "<br>";
#addslashesh - this funciton is used to add backslashesh in the predefined words.;

$str = addslashes("Hello World, I 'm' ritesh");
echo $str;


echo "<br>";
#bi2hex - this function is used to convert string to hexadecimal.

$str = bin2hex("Hello World, I m ritesh");
echo $str;


echo "<br>";
// Chop - this function is used to remove words from the right end;

$str = "Hello World, I m ritesh";
echo chop($str,"ritesh");


echo "<br>";
// chr - this function converts a ASCII specified value to the character;

$str = chr(052);
echo $str;


echo "<br>";
// chunk split  - this function splite a string in to a small parts.


$str = "Hello World, I m ritesh";
echo chunk_split($str,4,"!~");


echo "<br>";
// convert_cyr_string - this function will convert a string from one cyrilic charcter to another.

$str = "Hello World";
echo convert_cyr_string($str,'H','W');


echo "<br>";
// convert_uudecode - this function decodes a uuencoded string.

$str = ",2&5L;&\@=V]R;&0A `";
echo convert_uudecode($str);


echo "<br>";
// convert_uuencode - this function will encode a string using uuencoded algorithm.

$str = "Hello Ritesh!";
echo convert_uuencode($str);


echo "<br>";
// count_chars - this function will return a information about characters used in string.
$str = "Hey ritesh r u learning PHP?";
echo count_chars($str,3);


echo "<br>";
// crc32 - this function calculates a 32crc with the %u sign.

$str = crc32("Ritesh Good Morning!");
printf("%u\n",$str);

echo "<br>";

$str = crc32("Ritesh Good Morning!");
echo ($str);


echo "<br>";

// crypt - this function has salt parameter means the 2 number or char and it  returns a hashed string using DES,bowlfish or MD5 algorithm. - u can choose from it. crypt creates an weak password.
// Salt is a 2-chr string choose from (a-z,0-9 and A-Z);

crypt($str,salt);


echo "<br>";
// explode - this function breaks a string into an array.


$str = "Hey I M Ritesh";
print_r(explode(" ",$str));
// echo $str;

echo "<br>";
// fprintf - this function is used to write a formated string to a stream.We can specifiy this to file or database.

fprintf();


echo "<br>";
// get_html_translation_table - this function returns a translated table by the htmlentities and html specialcharacters.

get_html_translation_table();

echo "<br>";
#hebrev - this function reverse a hebrev characters.


echo "<br>";
// hex2bin - this function converts a strings hexadecimal values to ASCII characters.


echo "<br>";
// html_entity_decode - this function converts a html entities to characters.

$str = 'https://www.tutorialspoint.com/php/php_function_html_entity_decode.htm';
echo html_entity_decode($str);


echo "<br>";
// htmlentities - this function converts character to html entities.

$str = "https://www.tutorialspoint.com/php/php_function_html_entity_decode.htm";
echo htmlentities($str);


echo "<br>";
// htmlspecialchars_decode - this function converts a html predefined entities to a character;

$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($str);

echo "<br>";
// htmlspecialchars - this function will convert the predefind charactes to html entities.

$str = "Hello & Ritesh";
echo htmlspecialchars($str);


echo "<br>";
// htmlspecialchars - this function will convert the predefind charactes to html entities.

//explode - this will convert from string to array.
//implode - this will convert from array to string.
//join - this will also convert from array to string.

echo "<br>";
// lcfirst - this function will convert the strings first element in lowercase.

$str = "RITESH";
echo lcfirst($str);

echo "<br>";
// levenshtein - Calculate the distance between 2 strings;
//Itrim - this function removes the right side word from the string.

echo "<br>";
$str = "Hello RITESH";
echo ltrim($str,"Hello");

// md5 - calculate a md5 hash of the string.
// md5_file - cal culates the md5 of the hash file


echo "<br>";
// metaphone - this function calculates the metaphone key of the string. this is using for spelling application.

echo metaphone("Ritesh");


echo "<br>";
// money_format - this function will show us the money format of the country.

$num = 25;
echo money_format("Price is  %i", $num);

echo "<br>";

$number = 1234.56;
echo money_format("The price is %i", $number);


// nl2br - this function breaks the newline in the breakline in html.

$new = nl2br("This is my office.\n We are working here together");
echo $new;

echo "<br>";

// ord - this function will return ASCII value of specified value

echo ord("Ritesh");

echo "<br>";
// parse_str -  - this function will parse the  string into variables

parse_str("Name=This is dolphin web&Employee=We are working here");
echo $Name."<br>";
echo $Employee;

echo "<br>";
// printf - this function is working on formatting strings.

$name = "Ritesh";
$age = 22;
printf("Hey I m %s and I have been working here since %u Years at the dolphians",$name,$age);


echo "<br>";
//quoted_printable_encode(string) - this function will encode the string from decode.

// $str = "Hey I m ritesh";
// print_r(str_getcsv($str));


echo "<br>";
// str_ireplace- this function will replace the specified values.

$str = "Hey welcome to the dolphin";
echo str_ireplace("Hey","Maggi","Hey Welcome to the dolphin");

echo "<br>";
// str_ireplace- this function will replace the specified values.


echo "<br>";
$str = "Hey welcome to the dolphin";
echo str_pad($str,40,".");


echo "<br>";
$str = "Hey welcome to the dolphin";
echo str_repeat("$str","09");


echo "<br>";
$str = "Hey welcome";
echo str_replace("Hey","Ritesh","Hey Welcome");


// This function performs a rot 13 encoding.
echo "<br>";
$str1 = "Url jrypbzr";
$str = "Hey welcome";
echo str_rot13($str);
echo "<br>";
echo str_rot13($str1);

echo "<br>";
$str = str_shuffle("Hey welcome");
echo $str;


echo "<br>";

// This function split the string into array.
$str = "Hey welcome";
print_r(str_split($str));


echo "<br>";
// This function compare the 2 strings that these are equal or not. If these are equal then output will be 0 not then 1.
echo strcasecmp("HEY WELCOME","HEY WELCOM");

echo "<br>";

// $strchr - this function  is checking only first occurence of the string.
echo strchr("Hey! Welcome","GOD");

echo "<br>";
$str = strcoll("Hey! Welcome","GOD");
echo $str;




?>