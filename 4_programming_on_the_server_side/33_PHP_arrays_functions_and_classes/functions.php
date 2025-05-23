<!DOCTYPE html>
<!--
Demonstration of functions in PHP
Sam Scott, McMaster University, 2025
-->
<?php
// returns the sum of three variables
function spam($a, $b, $c)
{
    return $a + $b + $c;
}

// returns the concatenation of three variables. 
// Demonstrates default values for parameters
function eggs($a="Hello, ", $b="World", $c="!")
{
    echo $a . $b . $c;
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
    <h1>Functions</h1>
    <p>spam(1,2,3) = <?= spam(1, 2, 3) ?></p>
    <p>Calling eggs(1,2,3):
        <?php
        $e = eggs(1, 2, 3);
        ?>
    </p>

    <p>Return value from eggs(1,2,3): <?php var_dump($e); ?></p>

    <p>Calling eggs():
        <?php
        $e = eggs();
        ?>
    </p>

    <p>Calling eggs("PHP ", "Rules"):
        <?php
        $e = eggs("PHP", "Rules");
        ?>
    </p>
</body>

</html>