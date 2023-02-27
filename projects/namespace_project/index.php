<!DOCTYPE html>
<html>
<head>
  <title>My Project</title>
</head>
<body>
  <?php
    // Include the namespace file
    require_once 'MyNamespace.php';

    // Create a new instance of MyClass
       
    $obj = new MyNamespace\MyClass();
  

    // Call the hello() method
    $obj->hello();
  ?>
</body>
</html>
