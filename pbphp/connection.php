<?php
    $username = "root";
    $password = "";
    $host = "localhost";
    $database = "facebook";
    
    $con = new mysqli($host, $username, $password, $database);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    
?>
