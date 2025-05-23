<!DOCTYPE html>
<!--
Demonstration of arrays in PHP
Sam Scott, McMaster University, 2025
-->
<?php
// A simple array
$a = ["red", 23, 55.7];

// An array of objects

// Get the Person class definition
include "person.php";

// Create an empty array
$person_array = [];

// Fill it with objects
$p1 = new Person("Sam");
array_push($person_array, $p1);

$p2 = new Person("Anne", 30);
$p1->increase_age(11);
array_push($person_array, $p2);

array_push($person_array, new Person("Andrew", 49));
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
    <h1>Arrays</h1>

    <p>The first array contains the following: <?= "$a[0] $a[1] $a[2]" ?></p>

    <p>Here are the names from the object array:
        <?php
        for ($i = 0; $i < count($person_array); $i++) {
            echo "{$person_array[$i]->get_name()} ";
        }
        ?>
    </p>

    <p>Here they are again using a foreach loop:
        <?php
        foreach ($person_array as $person) {
            echo "{$person->get_name()} ";
        }
       
        ?>
    </p>
    
    <h1>var_dumps...</h1>
    <pre><?php var_dump($a) ?></pre>
    <pre><?php var_dump($person_array) ?></pre>
</body>

</html>