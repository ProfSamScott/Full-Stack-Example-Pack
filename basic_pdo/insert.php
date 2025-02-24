<!DOCTYPE html>
<?php
/**
 * This is an example of an INSERT query using parameters from a form.
 * Use the grades table (grades.sql) from the example pack, and make sure 
 * you change connect.php to use your correct login information.
 * 
 * Sam Scott, McMaster University, 2025
 */
include "connect.php";

$firstname = filter_input(INPUT_POST, "first", FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_POST, "last", FILTER_SANITIZE_STRING);
$start = filter_input(INPUT_POST, "start", FILTER_SANITIZE_STRING);

$paramsok = false;
if (
    $firstname !== null && $firstname !== "" &&
    $lastname !== null && $lastname !== "" && $start !== null
) {
    $paramsok = true;
    $command = "INSERT into grades (firstname, lastname, start) VALUES (?, ?, ?)";
    $stmt = $dbh->prepare($command);
    $args = [$firstname, $lastname, $start];
    $success = $stmt->execute($args);
}

?>
<html>

<head>
    <title>Insert Script</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/basic_examples.css">
</head>

<body>
    <?php
    if ($paramsok) {
        if ($success) {
            echo "<p>Win!</p>";
            echo "<p>{$stmt->rowCount()} rows were affected by your 
query.</p>";
        } else {
            echo "<p>Fail…</p>";
        }
    } else {
        echo "<p>Something was wrong with your parameters!</p>";
    }
    ?>
</body>

</html>