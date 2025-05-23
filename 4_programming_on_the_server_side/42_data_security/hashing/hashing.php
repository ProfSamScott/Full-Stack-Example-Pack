<?php
/**
 * Example of password hashing functions in PHP
 * Sam Scott, McMaster University, 2025
 */

// 1. get the hashed password
//     normally you would get this from the DB where only the hashed 
//     version is stored.
$pwd = password_hash("mypassword", PASSWORD_BCRYPT);
echo "hash of original password: '$pwd'<br>";

// 2. get what the user entered
$userpwd = filter_input(INPUT_POST, "password");

// 3. compare
if (password_verify($userpwd, $pwd)) {
    echo "Access Granted.<br>'$userpwd' matches";
} else {
    echo "Access Denied.<br>'$userpwd' does not match";
}

// 4. Here's a new hash for the password you entered
$newpwd = password_hash($userpwd, PASSWORD_BCRYPT);

echo "<br>hash of password received: '$newpwd'";