<!DOCTYPE html>
<!--
Demonstration of a few features of PHP variables
Sam Scott, McMaster University, 2025
-->
<?php
# Variable declarations are here
$a = "I'm a String!";   # String
$b = rand(1, 10);       # int
$c = 45.6 - $b;         # float
$d = true;              # boolean
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
    <link rel="stylesheet" href="css/default.css">
    <style>
        #var_dumps {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <?php
    echo "<h1>Your first variable contains: " . $a . "</h1>";
    ?>

    <h1>
        <?php
        echo "Your second variable contains: $b";
        ?>
    </h1>

    <h1>Your third variable contains <?= $c ?></h1>

    <h1>
        <?php
        if ($d) {
            echo "Your fourth variable was TRUE!";
        } else {
            echo "Your fourth variable was FALSE!";
        }
        ?>
    </h1>


    <h1>Here are the var_dumps...</h1>
    <div id="var_dumps">
        <pre><?php
        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        ?></pre>
    </div>
</body>

</html>