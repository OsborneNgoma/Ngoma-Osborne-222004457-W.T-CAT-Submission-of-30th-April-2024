<?php
    $servername = "localhost";
    $username = "root"; // your MySQL username
    $password = ""; // your MySQL password
    $dbname = "cams"; // your database name
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
