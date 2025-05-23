<?php
/**
 * Example of using sessions with ajax.
 * 
 * Sam Scott, McMaster University, 2025
 */
session_start();

// The customer just arrived, so give them a new number
$_SESSION["number"] = 10;

?><!DOCTYPE html>
<html>

<head>
    <title>Lineup</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/takeanumber.js"></script>
</head>

<body>
    <h1>Welcome to My Shop</h1>
    <p id="message">Welcome! You are number 10 in line. Shouldn't be long.</p>
    <input type="button" value="Check Again" id="check">
</body>

</html>