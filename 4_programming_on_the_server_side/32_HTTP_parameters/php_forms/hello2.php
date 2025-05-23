<!DOCTYPE html>
<?php
/* Example Hello program with parameters and error handling.
 * The error handling in this program is not very slick. Can you make
 * it behave in a more graceful way?
 * 
 * Sam Scott, McMaster University, 2025
 */
$firstname = filter_input(INPUT_GET, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_GET, "age", FILTER_VALIDATE_INT);
$email = filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);
?>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Hello Client</title>
    <style>
        .warning {
            color: red
        }
    </style>
</head>

<body>
    <p class="warning">
        <?php
        if ($firstname === null) {
            echo "Name not received! ";
        }
        if ($age === null or $age === false) {
            echo "Age not received or invalid! ";
        }
        if ($email === null or $email === false) {
            echo "Email not received or invalid! ";
        }
        ?>
    </p>
    <p>Hello, <?= $firstname ?>!</p>
    <p>Your email address is: <?= $email ?></p>
    <p>Your suggested userid is: <?= $firstname . $age ?>
</body>

</html>