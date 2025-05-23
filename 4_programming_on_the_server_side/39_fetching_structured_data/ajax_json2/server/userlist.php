<?php
/**
 * Returns a json-encoded list of User objects drawn from a database. It
 * does this by building and encodes an associative array. Because JavaScript
 * objects are also associative arrays, the decoded result can be treated like
 * an object in JavaScript.
 * 
 * Use the grades table (grades.sql) from the example pack, and make sure you 
 * change connect.php in the server folder to use your correct login 
 * information.
 * 
 * Sam Scott, McMaster University, 2025
 */
header('Content-Type: application/json');

include "connect.php";

// Prepare and execute the DB query
$command = "SELECT firstname, lastname, final_exam FROM grades ORDER BY lastname";
$stmt = $dbh->prepare($command);
$success = $stmt->execute();

// Fill an array with User objects based on the results.
$userlist = [];
while ($row = $stmt->fetch()) {
    // This associative array (object) contains user data.
    $user = [
        "firstname" => $row["firstname"],
        "lastname" => $row["lastname"],
        "finalexam" => (int)$row["final_exam"]
    ];
    // Add the associative array (object) to the array we are returning
    array_push($userlist, $user);
}

// Write the json encoded array to the HTTP Response
echo json_encode($userlist);
