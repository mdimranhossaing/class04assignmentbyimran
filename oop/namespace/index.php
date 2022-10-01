<?php
  namespace Html;
  class Person {
    public $name = "";
    public $age = 0;
    public function info() {
      echo "<p>Name : {$this->name} <br> Age: {$this->age}</p>";
    }
  }
  $table = new Person();
  $table->name = "Siyam Chowdhory";
  $table->age = 10;
?>

<!DOCTYPE html>
<html>
  <body>

    <?php
    $table->info();
    ?>

  </body>
</html>