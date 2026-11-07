<?php 
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "auth_demo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->conect_error) {
        die("Connection Failed") . $conn->connect_error;
    }
        echo "Connected";
?>