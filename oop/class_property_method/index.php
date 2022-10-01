<?php 

  class Flowers {
    // Propertise
    public $name;
    public $color;

    // Methods
    function set_name( $name ) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
    function set_color( $color ) {
      $this->color = $color;
    }
    function get_color() {
      return $this->color;
    }
  }

  // Class Instantiate
  $rose = new Flowers();
  $rose_color = new Flowers();
  $sunflower = new Flowers();
  $sunflower_color = new Flowers();

  // Create Objects
  $rose->set_name('Rose');
  $rose_color->set_color('Red');
  $sunflower->set_name('Sunflower');
  $sunflower_color->set_color('Yellow');

  echo "<h1>The Flower name is <span style='color:red'>" . $rose->get_name() . "</span> and the Flower Color is <span style='color:red'> " . $rose_color->get_color() . "</span></h1>";
  echo "<br>";
  echo "<h1>The Flower name is <span style='color:yellow'>" . $sunflower->get_name() . "</span> and the Flower Color is <span style='color:yellow'> " . $sunflower_color->get_color() . "</span></h1>";

?>

<style>
  body {
    margin: 0;
    margin-top: 50px;
    padding: 0;
    background-color: #0d460d;
    text-align: center;
  }
  h1 {
    color: #fff;
  }
</style>