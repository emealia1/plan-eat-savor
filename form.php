<doctype html>
<html>
	<head></head>
	<body>
		<?php 
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$address = $_POST["address"];
			$email = $_POST["email"];
			$zip = $_POST["zip"];
			$phone = $_POST["phone"];
		?>

		<h1>Hello <?php echo $fname?></h1>
		Here is your info
		<div>
		<?php echo $email?>
		<?php echo $phone?>
		</div>

	</body>
</html>