<!DOCTYPE html>
<?php
/* Example Hello World program with Parameters. This one handles error cases
 * (missing or non-numeric parameter) more gracefully.
 * 
 * Sam Scott, McMaster University, 2025
 */
?>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Hello Client Repeat 2</title>
</head>

<body>
    <?php
    $n = filter_input(INPUT_GET, "num", FILTER_VALIDATE_INT);
    if ($n === null) {
        echo "<p>ERROR: 'num' parameter not found.</p>";
    } elseif ($n === false) {
        echo "<p>ERROR: 'num' parameter not a number.</p>";
    } else {
        for ($i = 0; $i < $n; $i++) {
            echo "<p>Hello, World!</p>";
        }
    }
    ?>
</body>

</html>