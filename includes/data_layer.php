<?php

// This will serve as our function library for data routines

function queryDatabase($sql) {
    // Create initial variables for the operation
    $serverName = "localhost";
    $userName = "root";
    $password = "test1234";
    $port = "3306";
    $db = "csc257";

    // Create connection
    $conn = new mysqli($serverName, $userName, $password ,$db, $port);

    // Get results
    $result = $conn->query($sql);

    return $result;
}?>