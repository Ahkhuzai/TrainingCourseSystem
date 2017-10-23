<?php
$servername = "localhost";
$username = "dsr_rtp_admin";
$password = "ElRv!%MKqz3=";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>