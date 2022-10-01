<?php
// Parent class
abstract class Fruits {
  public $name;
  public function __construct($n)
  {
    $this->name = $n;
  }
  abstract public function introduction() : string;
}

// Child classes
class Mango extends Fruits {
  public function introduction() : string {
    return "The fruit name is $this->name";
  }
}

class Orange extends Fruits {
  public function introduction() : string {
    return "The fruit name is $this->name";
  }
}


// Create objects from the child classes
$mango = new Mango("Mango");
echo $mango->introduction();
echo "<br>";

$orange = new Orange("Orange");
echo $orange->introduction();
echo "<br><br>";

// =========================================

  abstract class School {
    abstract protected function namePrefix($name);
  }

  class Student extends School {
    public function namePrefix($name) {
      if ($name == "Imran Hossain") {
        $prefix = "MD.";
      } elseif ($name == "Nabila Islam") {
        $prefix = "Mrs.";
      } else {
        $prefix = "";
      }
      return "{$prefix} {$name}";
    }
  }

  $class = new Student;
  echo $class->namePrefix("Imran Hossain");
  echo "<br>";
  echo $class->namePrefix("Nabila Islam");

?> 