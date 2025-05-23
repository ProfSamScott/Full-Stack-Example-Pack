<!DOCTYPE html>
<?php
/**
 * A PDO example to go with example.php and showsingleuser.php.
 * 
 * It's just proof of concept. It doesn't actually delete.
 *  
 * Sam Scott, McMaster University, 2025
 */

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
?>
<html>

<head>
    <title>SELECT Queries</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/basic_examples.css">
</head>

<body>
    <p>Delete request receieved for student_id = <?= $id ?></p>
</body>

</html>