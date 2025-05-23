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
    // remove all session variables
    session_unset();

    // destroy the session 
    session_destroy();
    ?>
    <p>Session destroyed</p>
</body>

</html>