<!DOCTYPE html>
<?php
/* Example of how to display an associative array in a table.

 * Sam Scott, McMaster University, 2025
 */
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Associative Arrays in PHP</title>
    <link rel="stylesheet" href="css/basic_examples.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        table {
            border-collapse: collapse;
            border: 1px solid black;
            margin: auto;
            width: 75%;
            margin-top: 20px;
        }

        tr {
            border: 1px solid black;
        }

        thead tr {
            background-color: black;
            color: white;
            text-align: left;
        }

        td {
            padding: 3px;
        }

        tbody tr:nth-child(odd) {
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <?php
    $user = [
        "studentid" => "6534654754",
        "age" => 18,
        "access" => true,
        "macid" => "bob123",
        "email" => "bob123@mcmaster.ca"
    ];
    ?>
    <table>
        <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($user as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>