<!DOCTYPE html>
<!--
Some examples of formatting today's date and time. 

For more information, see
http://www.w3schools.com/php/func_date_date.asp

Sam Scott, McMaster University, 2025
-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date formating examples</title>
    <link rel="stylesheet" href="css/default.css">
</head>

<body>
    <?php
    // To avoid a warning, you must set the timezone
    date_default_timezone_set("Canada/Eastern");

    echo "<p>" . date("M d Y") . "</p>";
    echo "<p>" . date("m/d/y") . "</p>";
    echo "<p>" . date("h:i:s A") . "</p>";
    echo "<p>" . date("l dS \of F Y h:i:s A") . "</p>";
    ?>
</body>

</html>