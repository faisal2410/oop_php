<?php 
/*
Namespaces are qualifiers that solve two different problems:

They allow for better organization by grouping classes that work together to perform a task
They allow the same name to be used for more than one class
*/


namespace Html;


class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

$newTable = new Html\Table()
$row = new Html\Row()

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>
