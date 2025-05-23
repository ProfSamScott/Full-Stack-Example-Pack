<?php
/**
 * One Page App Example...
 * Sam Scott, McMaster University, 2025
 */
 
// get the parameters and filter them
$op1 = filter_input(INPUT_GET, "op1", FILTER_VALIDATE_INT);
$op2 = filter_input(INPUT_GET, "op2", FILTER_VALIDATE_INT);

// compute answer only if the parameters were ok
$paramsok = false;
if ($op1 !== null && $op2 !== null && $op1 !== false && $op2 !== false) {
    $answer = $op1 + $op2;
    $paramsok = true;
}

// VIEW
?><!DOCTYPE html>
<html>
    <head>
        <title>Addition App</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Enter an Addition Problem</h1>
        <form action="onepageapp.php">
            <input type="number" name="op1" required> +
            <input type="number" name="op2" required>
            <input type="submit">
        </form>
        <?php
        if ($paramsok) {
            ?>
            <h1>Answer to Last Problem</h1>
            <p><?= $op1 ?> + <?= $op2 ?> = <?= $answer ?></p>
            <form action="onepageapp.php">
                <input type="submit" value="Clear">
            </form>
            <?php
        }
        ?>
    </body>
</html>
