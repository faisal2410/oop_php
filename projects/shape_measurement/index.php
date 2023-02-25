<!DOCTYPE html>
<html>
<head>
	<title>PHP Project</title>
</head>
<body>
	<form method="post" action="process.php">
		<label>Shape:</label>
		<select name="shape">
			<option value="circle">Circle</option>
			<option value="rectangle">Rectangle</option>
			<option value="triangle">Triangle</option>
		</select><br><br>
		<label>Measurement:</label>
		<input type="text" name="measurement"><br><br>
		<button type="submit">Calculate Area</button>
	</form>
</body>
</html>
