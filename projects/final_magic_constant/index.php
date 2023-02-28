<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<?php
		require_once 'config.php';
		use MyNamespace\MyClass;
		$obj = new MyClass();
		echo "<h1>{$obj->getTitle()}</h1>";
		echo "<p>{$obj->getContent()}</p>";
	?>
</body>
</html>
