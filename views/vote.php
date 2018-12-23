<?php include "partials/header.php"; ?>

<?php if($error) { ?>
	<div class="alert alert-danger" role="alert"><?= $error ?></div>
<?php } ?>

<h1>Candidates</h1>
<form action="votesubmit.php" method="post">
	<?php foreach($candidates as $candidate) { ?>
	<div class="row space15">
		<div class="col-sm">
			<img src="candidates/<?= $candidate->id ?>.jpg" class="candidate" />
		</div>		
		<div class="col-sm">
			<p><?= $candidate->name ?></p>
		</div>
		<div class="col-sm text-right">
			<input type="radio" name="candidateid" value="<?= $candidate->name ?>">
		</div>
	</div>
	<?php } ?>

	<button type="submit" class="btn btn-primary mb-2">Vote!</button>
</form>

<?php include "partials/footer.php"; ?>
