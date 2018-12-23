<?php include "partials/header.php"; ?>

<?php if($error) { ?>
	<div class="alert alert-danger" role="alert"><?= $error ?></div>
<?php } ?>

<h1>Register to vote</h1>
<form action="registersubmit.php" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label for="studentid">Student Id</label>
		<input type="text" class="form-control" id="studentid" name="studentid" required />
	</div>
	<div class="form-group">
		<label for="picture">Picture</label>
		<input type="file" method="post" class="form-control" id="picture" name="picture" required />
	</div>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="name" name="name" required />
	</div>
	<div class="form-group">
		<label for="program">Program</label>
		<select class="custom-select" id="program" name="program" required>
			<option selected>Choose one</option>
			<option value="web">Web Developer</option>
			<option value="cna">CNA</option>
			<option value="cyb">Cyber Security</option>
		</select>
	</div>
	<div class="form-group">
		<label for="platform">Platform</label>
		<textarea class="form-control" id="platform" name="platform" required></textarea>
	</div>

	<button type="submit" class="btn btn-primary mb-2">Enter</button>
	<a href="login.php">Back</a>
</form>

<?php include "partials/footer.php"; ?>