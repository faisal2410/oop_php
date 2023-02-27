<!DOCTYPE html>
<html>
<head>
  <title>My Project</title>
</head>
<body>
  <?php
    // Include the trait file
    require_once 'MyTrait.php';

    // Create a new instance of MyClass
    $obj = new MyClass();

    // Call the hello() method, which uses the trait
    $obj->hello();
  ?>
</body>
</html>
