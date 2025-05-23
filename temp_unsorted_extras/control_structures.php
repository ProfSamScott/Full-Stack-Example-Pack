<!DOCTYPE html>
<!--
Demonstration of basic PHP control structures
Sam Scott, McMaster University, 2025
-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Structures</title>
    <link rel="stylesheet" href="css/default.css">
</head>

<body>
    <h1>If statement</h1>
    <p>
        <?php
        if (rand(1, 100) <= 50) {
            echo "heads";
        } else {
            echo "tails";
        }
        ?>
    </p>


    <h1>Chained elseif</h1>
    <p>
        <?php
        $s = rand(1, 100);
        if ($s < 25) {
            echo "you lose.";
        } elseif ($s >= 25 and $s <= 75) {
            echo "you break even.";
        } else {
            echo "you win!";
        }
        ?>
    </p>


    <h1>For loop</h1>
    <?php
    $repetitions = rand(1, 10);
    for ($i = 0; $i < $repetitions; $i++) {
        echo "<p>$i. Look at me go!</p>";
    }
    ?>


    <h1>While loop</h1>
    <?php
    $repetitions = rand(1, 10);
    $i = 0;
    while ($i < $repetitions) {
        echo "<p>$i. Look at me go!</p>";
        $i++;
    }
    ?>


    <h1>Do-While loop</h1>
    <?php
    $repetitions = rand(1, 10);
    $i = 0;
    do {
        echo "<p>$i. Look at me go!</p>";
        $i++;
    } while ($i < $repetitions);
    ?>
</body>

</html>