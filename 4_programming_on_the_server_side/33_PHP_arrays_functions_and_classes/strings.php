<!DOCTYPE html>
<!--
Demonstration of the array-like properties of strings in PHP
Sam Scott, McMaster University, 2025
-->
<?php
// A string
$s = "server-side scripting is fun!";

// Replace s with S
for ($i = 0; $i < strlen($s); $i++) {
    if ($s[$i] === "s") {
        $s[$i] = "S";
    }
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions, Objects, Arrays</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h1>Strings</h1>

    <p>The string variable contains: <?= $s ?>. It's first character is <?= $s[0] ?></p>

    <h1>var_dump...</h1>
    <pre><?php var_dump($s) ?></pre>
</body>

</html>