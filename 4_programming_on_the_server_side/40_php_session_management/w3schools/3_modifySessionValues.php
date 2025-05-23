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
    <title>Access $_SESSION</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    // to change a session variable, just overwrite it 
    $_SESSION["favcolor"] = "yellow";
    ?>
    <p>"favcolor" session key has been set to "yellow"</p>
</body>

</html>