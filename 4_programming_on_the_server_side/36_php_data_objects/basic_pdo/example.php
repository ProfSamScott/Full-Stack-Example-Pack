<!DOCTYPE html>
<?php
/**
 * A simple PDO INSERT example. Use the grades table (grades.sql) 
 * from the example pack, and make sure you change connect.php to use your 
 * correct login information.
 * 
 * Sam Scott, McMaster University, 2025
 */
include "connect.php";

$command = "INSERT into grades (firstname, lastname) VALUES (?, ?)";
$stmt = $dbh->prepare($command);
$args = ["Drizzt", "Do'Urden"];
$success = $stmt->execute($args);
?>
<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/basic_examples.css">
</head>

<body>
    <?php
    if ($success) {
        echo "<p>Win!</p>";
        echo "<p>{$stmt->rowCount()} rows were affected by your 
query.</p>";
    } else {
        echo "<p>Fail…</p>";
    }
    ?>
</body>

</html>