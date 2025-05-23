<?php
/**
 * A simple example of logging in.
 * 
 * Sam Scott, McMaster University, 2025
 */
session_start();

// check login information first
$userid = filter_input(INPUT_POST, "userid", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
if ($userid !== null and $password !== null) {
    if ($userid === "samscott" and $password === "samspassword") {
        $_SESSION["userid"] = $userid;
    } else {
        // bad login attempt. kick them out.
        session_unset();
        session_destroy();
    }
}
?><!DOCTYPE html>
<html>

<head>
    <title>Login Example</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    if (isset($_SESSION["userid"])) {
        ?>
        <h1>Welcome <?= $_SESSION["userid"] ?>!</h1>
        <p>Where would you like to go?</p>
        <ul>
            <li><a href="here.php">here</a></li>
            <li><a href="there.php">there</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    <?php
} else {
    ?>
        <h1>Login Error! Access denied.</h1>
        <a href="index.html">Try again.</a>
    <?php
}
?>
</body>

</html>