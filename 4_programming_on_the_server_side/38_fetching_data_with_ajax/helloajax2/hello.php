<?php
/**
 * Very simple "server" script. Takes one parameter and echoes back an HTML
 * string to say hello.
 * 
 * Sam Scott, McMaster University, 2025
 */

// get the parameter
$name = filter_input(INPUT_GET, "nameparam", FILTER_SANITIZE_SPECIAL_CHARS);

// echo a string into the response
echo "Hello, <strong>$name</strong>!!!";
