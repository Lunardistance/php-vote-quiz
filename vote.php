<?php

// connect to the database and start the session
include "includes/connect.php";

// get ID from the session
$studentid = $_SESSION['studentid'];

// else redirect to login
if(empty($studentid)) {
	header("Location: login.php?error=You need to login first");
	exit;
}

// get the candidates
$candidates = [];
$result = $conn->query("SELECT * FROM candidates");
while ($row = $result->fetch_object()) {
	$candidates[] = $row;
}

$error = isset($_GET['error']) && $_GET['error'] != "" ? $_GET['error'] : false;

// include the view
include "views/vote.php";
