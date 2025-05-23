<!DOCTYPE html>
<!--
Example of what could happen if you don't clean up your 
user input. Sam Scott, 2019.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h1>Try to hack me by sending a parameter called "param" that contains a &lt;script&gt; element.</h1>
    <?php
    echo "<p>$_GET[param]</p>";
    ?>
</body>

</html>