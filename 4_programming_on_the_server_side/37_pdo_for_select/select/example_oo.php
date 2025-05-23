<!DOCTYPE html>
<?php
/**
 * A simple PDO SELECT example using an array of objects. 
 * Use the grades table (grades.sql) from eLearn, and make sure you 
 * change connect.php to use your correct login information.
 * 
 * Sam Scott, McMaster University, 2025
 */
include "connect.php";
include "user.php";     // import User class definition

// Prepare and execute the DB query
$command = "SELECT firstname, lastname FROM grades ORDER BY lastname";
$stmt = $dbh->prepare($command);
$success = $stmt->execute();

// The line below instructs PDO to fetch data into matching fields
// in the User class. PDO will populate the fields, then call the
// constructor, assuming no arguments are required.
$stmt->setFetchMode(PDO::FETCH_CLASS, 'User'); 

// Fill an array with User objects based on the results.
$userlist = [];
while ($user = $stmt->fetch()) {
    array_push($userlist, $user);
}
?>
<html>

<head>
    <title>SELECT Queries</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/basic_examples.css">
</head>

<body>
    <?php
    if ($success) {
        echo "<p>Win!</p>";
        $n = count($userlist);
        echo "<p>$n rows were retrieved by your query.</p>";
        echo "<ul>";

        // Display each user object using its display method
        foreach ($userlist as $user) {
            echo $user->toListItem(); 
        }
        
        echo "</ul>";
    } else {
        echo "<p>Fail…</p>";
    }
    ?>
</body>

</html>
