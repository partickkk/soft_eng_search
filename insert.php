<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Chef</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Edit the Chef!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="last_name">
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="text" name="email">
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender">
		</p>
		<p>
			<label for="c_address">Address</label> 
			<input type="text" name="c_address">
		</p>
		<p>
			<label for="city">City</label> 
			<input type="text" name="city">
		</p>
		<p>
			<label for="nationality">Nationality</label> 
			<input type="text" name="nationality">
		</p>
		<p>
			<label for="years_of_experience">Years of Experience</label> 
			<input type="text" name="years_of_experience">
			<input type="submit" name="insertChefBtn">
		</p>
	</form>
</body>
</html>
