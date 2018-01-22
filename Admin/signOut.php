<?php
error_reporting(0);
session_start(); 
if (isset($_SESSION['user_id'])) {
    session_destroy();
    header("Location:http://uqu.edu.sa");
}
?>