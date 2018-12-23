<?php

// get values from POST
$studentid = $_POST['studentid'];
$name = $_POST['name'];
$program = $_POST['program'];
$platform = $_POST['platform'];

// connect to the database and start the session
include "includes/connect.php";

// is ID in voters table
$result = $conn->query("SELECT studentid FROM voters WHERE studentid='$studentid'");
$isValid = $result->num_rows > 0;

// else not elegible
if( ! $isValid) {
	header("Location: register.php?error=The person is not elegible to vote");
	exit;
}

// check if ID is in candidates table
$result = $conn->query("SELECT id FROM candidates WHERE id='$studentid'");
$isCandidate = $result->num_rows > 0;

// if true error alredy registered
if($isCandidate) {
	header("Location: login.php?error=The person already registered");
	exit;
}

// upload and save the image
$file = $_FILES['picture']['tmp_name'];
if ( ! isset($file)) die("Please select a profile pic");
if(move_uploaded_file($file, "candidates/$studentid.jpg")){
	echo "uploaded";
};


// add it to the database
$conn->query("
	INSERT INTO candidates(id, name, program, platform) 
	VALUES ('$studentid', '$name', '$program', '$platform')");

// redirect to login
header("Location: login.php");
