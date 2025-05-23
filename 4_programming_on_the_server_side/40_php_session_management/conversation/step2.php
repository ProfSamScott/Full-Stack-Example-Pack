<?php
/**
 * These files show you how session management works. 
 * 
 * Sam Scott, McMaster University, 2025
 **/

// 1. Always start the session at the very top of your file. 
session_start();

// 2. Store data in the $_SESSION superglobal
$_SESSION["name"] = filter_input(INPUT_GET,"name",FILTER_SANITIZE_SPECIAL_CHARS);
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Session Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Hello <?= $_SESSION["name"] ?></h1>
    <p>How old are you?</p>
    <form action="step3.php" method="GET">
        <input type="number" name="age">
        <input type="submit">
    </form>
</body>

</html>