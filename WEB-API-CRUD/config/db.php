<?php
$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "db";      

// Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connectiona
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>