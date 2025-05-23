<!DOCTYPE html>
<?php
/**
 * A PDO SELECT example that writes code as well as content. 
 * Use the grades table (grades.sql) from the example pack, 
 * and make sure you change connect.php to use your correct 
 * login information.
 * 
 * Sam Scott, McMaster University, 2025
 */
include "connect.php";

// Prepare and execute the DB query
$command = "SELECT firstname, lastname, student_id FROM grades ORDER BY lastname";
$stmt = $dbh->prepare($command);
$success = $stmt->execute();
?>
<html>

<head>
    <title>SELECT Queries</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/basic_examples.css">
</head>

<body>
    <h1>Click a Name Below</h1>
    <?php
    // output
    if ($success) {
        echo "<ul>";

        while ($row = $stmt->fetch()) {
            echo "<li><a href='showsingleuser.php?id=$row[student_id]'>";
            echo "$row[firstname] $row[lastname]"; 
            echo "</a></li>";
        }
        
        echo "</ul>";
    } else {
        echo "<p>Fail…</p>";
    }
    ?>
</body>

</html>