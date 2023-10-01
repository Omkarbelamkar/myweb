<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
</head>
<body>
<?php
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$age = $_POST['age'];
			$contact = $_POST['contact'];
			$address = $_POST['address'];

			// Do something with the form data here
			// For example, you can insert the data into a database or send an email
		}
	?>
</body>
</html>
