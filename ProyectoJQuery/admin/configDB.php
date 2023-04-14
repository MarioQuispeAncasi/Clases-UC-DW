<?php 
    const host = "localhost";
    const user = "root";
    const pass = "Bodyglove1$";
    const db = "dulcecafe";

    $conn = new mysqli(host, user, pass, db);

    if ($conn->connect_errno) {
        die($conn->connect_error);
    }
?>