<?php 

/* Step 1: Make a variable with some text as value
   Step 2: Use crypt() function to encrypt it
   Step 3: Assign the crypt result to a variable
   Step 4: Echo the variable
*/

$password = "mysecretpassword";
$salt = "iusesomecrazystrings22";
password_encrypted = crypt($password, $salt);



?>