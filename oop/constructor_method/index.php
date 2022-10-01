<?php 

  class Fruits {
    // Propertise
    public $name;
    public $color;

    // Construct Methods
    function __construct( $name, $color )
    {
      $this->name = $name;
      $this->color = $color;
    }

    // Method
    function get_name() {
      return $this->name;
    }
    function get_color() {
      return $this->color;
    }
  }

  // Class Instantiate & Create Objects
  $mango = new Fruits("Mango", "Green");

  // Show Data
  echo "Fruit name: " . $mango->get_name();
  echo "<br>";
  echo "Fruit color: " . $mango->get_color();

?>