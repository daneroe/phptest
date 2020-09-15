<?php

    $db = new mysqli("localhost", 'root', '', 'dev');
    $connectionStatus = '';
    $error = '';

    $createQuery = "CREATE TABLE IF NOT EXISTS `refreshTimes` (
        `stamp` TIMESTAMP
    )";

    $insertQuery = "INSERT INTO refreshTimes(`stamp`)
                    VALUES(NOW())";

    $getQuery = "SELECT max(`stamp`) from refreshTimes";

    if ($db->connect_error) {
        $connectionStatus = "Connection Failed: " . $db->connect_error;
    } else {
        $connectionStatus = "Connection Sucessful!";
    }

    try {
        $db->query($createQuery);
        $db->query($insertQuery);
        $latest = $db->query($getQuery);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }

?>