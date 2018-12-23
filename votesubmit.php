<?php
$selectedCandidate = $_POST['candidateid'];
$studentid = $_SESSION['studentid'];


// connect to the database and start the session
include "includes/connect.php";

// Check if empty, handle.  If not, insert the data into the database.
if(empty($selectedCandidate)) {
	header("Location: vote.php?error=You need to select a candidate first");
	exit;
}

if (!empty($_SESSION['studentid'])) {
    $user_name = $_SESSION['studentid'];
}

//Insert the value from slection on votes page into candidatename in votes table in database.
$conn->query("
	INSERT INTO votes(id, candidatename) 
	VALUES ('$studentid', '$selectedCandidate')");

$_SESSION['selectedCandidate'] = $selectedCandidate;
$_SESSION['studentid'] = $studentid;


//Redirect to confirmation page
header("Location: confirmation.php");

