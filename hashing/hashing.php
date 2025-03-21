<?php
/**
 * Example of password hashing functions in PHP
 * Sam Scott, McMaster University, 2025
 */

// 1. get the hashed password
//     normally you would get this from the DB where only the hashed 
//     version is stored.
$pwd = password_hash("mypassword", PASSWORD_BCRYPT);

// 2. get what the user entered
$userpwd = filter_input(INPUT_POST, "password");

// 3. compare
if (password_verify($userpwd, $pwd)) {
    echo "Access Granted.<br>'$userpwd' matches hash '$pwd'";
} else {
    echo "Access Denied.<br>'$userpwd' does not match hash '$pwd'";
}
