<?php include "partials/header.php"; ?>

<?php if($error) { ?>
	<div class="alert alert-danger" role="alert"><?= $error ?></div>
<?php } ?>

<h1>Student poll</h1>
<form action="loginsubmit.php" method="post">
	<div class="form-group">
		<label for="studentid">Student Id</label>
		<input type="number" class="form-control" id="studentid" name="studentid" required />
	</div>

	<button type="submit" class="btn btn-primary mb-2">Enter</button>
	<a href="register.php">Register</a>
	<a href="results.php">Results</a>
</form>

<?php include "partials/footer.php"; ?>
