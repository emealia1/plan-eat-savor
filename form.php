<doctype html>
<html>
	<head></head>
	<body>
		<?php 
			$fname = $_GET["fname"];
			$lname = $_GET["lname"];
			$address = $_GET["address"];
			$email = $_GET["email"];
			$zip = $_GET["zip"];
			$phone = $_GET["phone"];
		?>

		<h1>Hello <?php echo $fname?></h1>

		<div>
		<?php echo $email?>
		<?php echo $phone?>
		</div>

	</body>
</html>