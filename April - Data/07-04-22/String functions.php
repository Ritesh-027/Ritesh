<?php

#addcslashes() Function - This function adds a backslashesh to the string for the particuler words only ;

$str = addcslashes("Hey Jay I m here!!!","h");
echo $str;



echo "<br>";
#addslashes () this function use to add slashesh in predefind words.

$shefy = ("Hey Ritesh are ' U ' a cheater?");
echo addslashes($shefy);


echo "<br>";
// bin2hex - this function use to convert a data from binary to hexadecimal.;

$stefy = ("Hey Ritesh");
echo bin2hex($stefy);


echo "<br>";
// chop - function removes the whitespaces from the right end from a string. only from right end side.

$str = ("hey shefu are you hungry???");
echo $str."<br>";
echo chop($str,"???");


echo "<br>";
// CHAR - this function converts the other type of values in character.[Decimal,Octal and Hex value only]

echo chr(420);


echo "<br>";
#chunk_split() Function - this function split a string into a chunks.

$chunk = "Hey Ritz are you a fire man!!!!";
echo chunk_split($chunk,1,".");


echo "<br>";
#convert_cyr_string() Function - this function converts a cyrilic string to another.


$cyr = "Hey Ritz are you a fire man. æøå";
echo convert_cyr_string("$cyr","m","n");


echo "<br>";
#convert_uuencode() Function - this function use to encode simple language to hard.

$enc = "How are You?!!!!";
echo convert_uuencode($enc);



echo "<br>";
#count_chars() Function - this function gives the information about the string that how many functions are unsed in string.

$cnt = "Hey Ritesh";
echo count_chars($cnt,3);


echo "<br>";
// crc32 - this function used to check cyclic redundency checksum for the string;

$crc = crc32("Ritesh");
printf("%u\n",$crc);



echo "<br>";
// explode() Function - this function breaks the string and convert it into array.


$expl = "Ritesh you are going to be a developer";
print_r(explode(" ","$expl"));


echo "<br>";

#hex2bin - this function converts a values from hexa decimal to binary.

echo hex2bin("48656c6c6f20576f726c6421");


?>