<!DOCTYPE html>
<?php
/* Example Hello program with Parameters. No error handling.
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
</head>

<body>
    <p>Hello, <?= $firstname ?>!</p>
    <p>Your email address is: <?= $email ?></p>
    <p>Your suggested userid is: <?= $firstname . $age ?>
</body>

</html>