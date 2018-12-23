<?php include "partials/header.php"; ?>





<h1>Results</h1>
<br><br>
<?php foreach($votes as $vote) { ?>
	<div>
		<!-- <div class="col-sm"> -->
		<h3><?= $vote->candidatename ?>:</h3></div>
		<div>Number of Votes: <?=$vote->frequency ?><br><br><br></div>
				
<?php }; ?>

<?php include "partials/footer.php"; ?>
