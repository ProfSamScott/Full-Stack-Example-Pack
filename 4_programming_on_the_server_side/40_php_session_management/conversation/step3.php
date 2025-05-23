<?php
/**
 * These files show you how session management works. 
 * 
 * Sam Scott, McMaster University, 2025
 **/

session_start();

// 3. Check to make sure the session is still alive.
//    To test this, click through to step 4, then come straight back to step 2
//    using history or by typing the URL.
if (!isset($_SESSION["name"])) {
    die("Error. Go back to <a href='step1.html'>Step 1</a>");
}

$_SESSION["age"] = filter_input(INPUT_GET, "age", FILTER_VALIDATE_INT);
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Session Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Hello <?= $_SESSION["name"] ?></h1>
    <p>What's your favorite color?</p>
    <form action="step4.php" method="GET">
        <input type="color" name="color">
        <input type="submit">
    </form>
</body>

</html>