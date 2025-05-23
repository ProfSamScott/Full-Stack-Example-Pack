<?php
/**
 * A simple example of logging in.
 * 
 * Sam Scott, McMaster University, 2025
 */
session_start();
$access = isset($_SESSION["userid"]);
?><!DOCTYPE html>
<html>

<head>
    <title>Login Example</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    if ($access) {
        echo "<h1>You Are HERE!</h1>";
        echo "<a href='menu.php'>back</a>";
    } else {
        echo "<h1>Not Logged in. Access denied.</h1>";
    }
    ?>
</body>

</html>