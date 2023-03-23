<!DOCTYPE html>
<html>
<head>
	<title>Simple Form</title>
</head>
<body>
	<form method="post" action="process.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name">
		<input type="submit" value="Submit">
	</form>
</body>
</html>

<?php
function getInput() {
    $name = $_POST["name"];
    return $name;
}

function displayResult($name) {
    echo "Hello, " . $name . "!";
}

?>