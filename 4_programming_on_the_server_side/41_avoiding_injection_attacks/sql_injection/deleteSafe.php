<!DOCTYPE html>
<?php
/* DELETION without PDO Parameters can open you to an injection attack
 * 
 * Sam Scott, April 2015
 */
include "connect.php";

// delete poll, if parameter set
$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_SPECIAL_CHARS);
$deletecommand = "DELETE FROM NewTestTable WHERE ID=?";
$stmt = $dbh->prepare($deletecommand);
$userParams = [$id];
if ($stmt->execute($userParams)) {
    $message = "ID received: $id. Number of rows deleted: {$stmt->rowCount()}.";
} else {
    $message = "Poll $id could not be deleted.";
}
?>
<html>

<head>
    <title>Injected</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Result</h1>
    <p><?= $message ?></p>
</body>

</html>