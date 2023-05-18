<?php
    $conn = new mysqli("localhost", "root", "", "user_info");

    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>