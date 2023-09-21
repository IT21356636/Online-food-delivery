<?php

    $serveruname = "localhost";
    $username = "root";
    $password = "";

    $db = "yummy_food";

    //create connection
    $conn = new mysqli($serveruname, $username, $password, $db);

    //check connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    
    echo "Connected successfully";
    
?>