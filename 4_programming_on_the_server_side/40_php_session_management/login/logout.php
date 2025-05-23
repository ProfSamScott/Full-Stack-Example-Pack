<?php
/**
 * A simple example of logging in.
 * 
 * Sam Scott, McMaster University, 2025
 */
session_start();
session_unset();
session_destroy();
?><!DOCTYPE html>
<html>

<head>
    <title>Login Example</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>You are so logged out.</h1>
    <a href="index.html">Log in again</a>
</body>

</html>