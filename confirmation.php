<?php


//Get the candidate of the selected radio button from voting page
session_start();
$selection = $_SESSION['selectedCandidate'];

//Put page html to use the name from code above.
include "views/confirmation.php";
