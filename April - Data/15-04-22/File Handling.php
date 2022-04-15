<?php

//readfile(filename) - this function can read any type of file in the code and returns it in output.

#Using open / die means exit from file.

$myfile = fopen("About.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file

while (!feof($myfile)) {
	echo fgets($myfile) . "<br>";
}

fclose($myfile);

?>