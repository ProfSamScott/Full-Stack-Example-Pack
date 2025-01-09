<!DOCTYPE html>
<?php
/**
 * This is an example of an UPDATE query using parameters from a form.
 * Use the grades table (grades.sql) from eLearn, and make sure you change
 * connect.php to use your correct login information.
 * 
 * Sam Scott, Mohawk College, 2019
 */
include "connect.php";

$firstname = filter_input(INPUT_POST, "first", FILTER_SANITIZE_STRING);
$exam = filter_input(INPUT_POST, "exam", FILTER_VALIDATE_INT);

$paramsok = false;
if (
    $firstname !== null && $firstname !== "" &&
    $exam !== null && $exam !== false
) {
    $paramsok = true;
    $command = "UPDATE grades SET final_exam=? WHERE firstname=?";
    $stmt = $dbh->prepare($command);
    $params = [$exam, $firstname];
    $success = $stmt->execute($params);
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