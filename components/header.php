<?php
$Server_Name = "localhost";
$User_Name = "root";
$Password = "";
$DataBase = "beauty_cosmetics";

// Create connection
$Connect_Data = new mysqli($Server_Name, $User_Name, $Password, $DataBase);
// Check connection
if ($Connect_Data->connect_error) {
    die("Connection failed: " . $Connect_Data->connect_error);
}

session_start();
?>