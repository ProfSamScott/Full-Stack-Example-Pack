<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=scott', "root", "");
} catch (Exception $e) {
    die('Could not connect to DB: ' . $e->getMessage());
}
