<?php 

  class Countries {
    // Propertises
    public $name;
    public $area;

    // Construct Method
    public function __construct($n, $a)
    {
      $this->name = $n;
      $this->area = $a;
    }
    
    // Method
    public function introduction() {
      echo "The country name is {$this->name} and the country area is {$this->area}.";
    }
  }

  // Country is inherited from Countries
  class Country extends Countries {
    public function capital($c) {
      return $c;
    }
  }

  // Class Instantiate
  $country = new Country("Bangladesh", "147,570[7] km2)");

  // Class Poperties
  echo "Name: {$country->name} <br><br>";
  echo "Area: {$country->area} <br><br>";

  // Class Methods
  echo $country->introduction() . "<br><br>";
  echo "The Capital is {$country->capital("Dhaka")}";
  echo "<br><br>";

  // Inheritance Protected Property
  class Foods {
    protected $unda = "Rice, Vegitable, Meet, Milk, Ege and etc";
  }
  
  class Food extends Foods {
    public function message() {
      return $this->unda;
    }
  }
  
  $x = new Food();
  echo "Foods items {$x->message()}";

?>