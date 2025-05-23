<?php
/**
 * Example from W3Schools
 * 
 * Modified by Sam Scott, McMaster University, 2025
 */
session_start();
?><!DOCTYPE html>
<html>

<head>
    <title>$_SESSION and $_COOKIE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>$_SESSION</h1>
    <pre><?php var_dump($_SESSION) ?></pre>
    <h1>$_COOKIE</h1>
    <pre><?php var_dump($_COOKIE) ?></pre>
</body>

</html>