<?php

    $servername = "localhost";
    $database = "last_advancedos";
    $username = "root";
    $password = "";
    global $con;
    // Create connection
    $con = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>