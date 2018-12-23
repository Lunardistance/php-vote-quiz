<?php




// $selectedCandidate = $_POST['candidateid'];

include "includes/connect.php";


//Create an array to put the votes to display.  Get the data from the votes table and group by how many times the candidate's name appears in table column.  While there are results, put them in the array.
$votes =[];
$resultss = $conn->query("SELECT DISTINCT(candidatename), COUNT(candidatename) AS frequency
FROM votes
GROUP BY candidatename
ORDER BY frequency DESC;");
while ($row=$resultss->fetch_object()){
    $votes[] = $row;
}


//Put the results html to work with the above code
include "views/results.php";

