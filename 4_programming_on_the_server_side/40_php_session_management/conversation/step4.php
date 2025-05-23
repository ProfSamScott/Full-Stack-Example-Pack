<?php
/**
 * These files show you how session management works. 
 * 
 * Sam Scott, McMaster University, 2025
 **/

session_start();
$_SESSION["color"] = filter_input(INPUT_GET, "color", FILTER_SANITIZE_SPECIAL_CHARS);

// 3b. Here I'm deliberately not checking to see if the session variables are set.
//     To see the effect of this, hit reload after loading the page the first time.
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Session Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Hello</h1>
    <p>Here's what I know about you...</p>
    <ul>
        <li>Your name is <?= $_SESSION["name"] ?></li>
        <li>You are <?= $_SESSION["age"] ?> years old</li>
        <li>Your favorite color is
            <span style='color:<?= $_SESSION["color"] ?>'>
                This one!
            </span>
        </li>
    </ul>
    <p>I shall now forget everything...</p>
    <?php
    // 4. Terminate the session
    session_destroy();
    ?>
</body>

</html>