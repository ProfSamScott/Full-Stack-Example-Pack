<!DOCTYPE html>
<?php
/* Example of associative arrays.

 * Sam Scott, McMaster University, 2025
 */
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Associative Arrays in PHP</title>
    <link rel="stylesheet" href="css/basic_examples.css">
</head>

<body>
    <?php
    $user = [];                         // creates empty array
    $user["studentid"] = "928374532";   // store some values 
    $user["age"] = 22;
    $user["access"] = true;

    // printing array element with a key (note you don't need the quotes)
    echo "<p>Your Userid: $user[studentid]</p>";

    // printing array element with variable key
    $key = "studentid";
    echo "<p>Your Userid: $user[$key]</p>";

    // braces to print a more complicated expression
    $a = "student";
    $b = "id";
    echo "<p>Your Userid: {$user[$a .$b]}</p>";

    // var_dump is a good way of outputting an array for debugging
    echo "<h3>var_dump</h3><pre>";
    var_dump($user);
    echo "</pre>";

    // another way to create an array
    $user = ["studentid" => "6534654754", "age" => 18, "access" => true];
    ?>
    <h3>Iterating over keys and values</h3>
    <ul>
        <?php
        foreach ($user as $key => $value) {
            echo "<li>$key: $value</li>";
        }
        ?>
    </ul>
</body>

</html>