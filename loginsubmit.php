<?php

// get values from POST
$studentid = $_POST['studentid'];

// connect to the database and start the session
include "includes/connect.php";

// is ID in voters table
$result = $conn->query("SELECT studentid FROM voters WHERE studentid='$studentid'");
$isValid = $result->num_rows > 0;

// else not elegible
if( ! $isValid) {
	header("Location: login.php?error=The person is not elegible to vote");
	exit;
}

// is ID in votes table
$resultt = $conn->query("SELECT id FROM votes WHERE id='$studentid'");
$alreadyVoted = $resultt->num_rows > 0;

// else already voted
if($alreadyVoted) {
	header("Location: login.php?error=The person already voted");
	exit;
}

// start a session 
$_SESSION['studentid'] = $studentid;

// redirect to vote
header("Location: vote.php");
