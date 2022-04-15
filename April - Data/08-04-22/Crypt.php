<?php

// Set the password
$password = 'veryweekpassword';

// Getting the hash, let the salt be automatically generated
$hashed_password = crypt($password);

// User entered password
$user_input = 'veryweekpassword';

// Verifying the passwords
if(hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
       echo "Password match!";
} else {
    echo "Password did not match!";
}

echo "<br>";

$str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo html_entity_decode($str);




?>