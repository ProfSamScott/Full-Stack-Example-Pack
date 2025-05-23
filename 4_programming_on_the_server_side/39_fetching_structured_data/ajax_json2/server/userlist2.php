<?php
/**
 * Returns a json-encoded list of User objects drawn from a database.
 * 
 * This version uses the user.php class definition to create the array of objects.
 * See the optional section on functions and objects in module 2 for more info.
 * 
 * Use the grades table (grades.sql) from the example pack, and make sure you 
 * change connect.php in the server folder to use your correct login 
 * information.
 * 
 * Sam Scott, McMaster University, 2025
 */
header('Content-Type: application/json');

include "connect.php";
include "user.php";

// Prepare and execute the DB query
$command = "SELECT firstname, lastname, final_exam FROM grades ORDER BY lastname";
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

// Write the json encoded array to the HTTP Response
echo json_encode($userlist);
