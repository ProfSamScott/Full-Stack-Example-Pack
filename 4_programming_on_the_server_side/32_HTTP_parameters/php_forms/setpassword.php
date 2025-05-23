<!DOCTYPE html>
<!-- Recieves and checks a password.
     Sam Scott, McMaster University, 2025 
-->
<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    $pw = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    if ($pw === null) {
        echo "<p>Error - no password received";
    } elseif (strlen($pw) < 8) {
        echo "<p>Error - password too short";
    } else {
        echo "<p>Password received</p>";
    }
    ?>
</body>

</html>