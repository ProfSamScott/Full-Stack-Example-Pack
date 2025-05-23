<!DOCTYPE html>
<!--
Demonstration of OOP in PHP
Sam Scott, McMaster University, 2025
-->
<?php
// Class definition for a Person
include "person.php";

// Creating and accessing objects
$p1 = new Person("Sam");
$p2 = new Person("Anne", 30);
$p1->increase_age(11);

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
    <h1>Objects</h1>
    <?= $p1->view() ?>
    <?= $p2->view() ?>

    <h1>var_dumps</h1>
    <!-- the <pre> element is useful here because it preserves the spacing -->
    <pre><?php var_dump($p1) ?></pre>
    <pre><?php var_dump($p2) ?></pre>
</body>

</html>