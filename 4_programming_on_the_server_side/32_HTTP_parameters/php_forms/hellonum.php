<!DOCTYPE html>
<?php
/* Example Hello World program with Parameters. No error checking.
 * 
 * Sam Scott, McMaster University, 2025
 */
?>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Hello Client Repeat</title>
</head>

<body>
    <?php
    $n = filter_input(INPUT_GET, "num", FILTER_VALIDATE_INT);
    for ($i = 0; $i < $n; $i++) {
        echo "<p>Hello, World!</p>";
    }
    ?>
</body>

</html>