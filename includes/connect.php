<?php 

// open my session
session_start();

// connect to the database
$conn = new mysqli("localhost", "root", "", "polls");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

