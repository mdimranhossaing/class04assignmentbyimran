<?php 

  class Person {
    // Propertise
    public $name;
    public $profession;

    // Construct Method
    function __construct($name, $profession)
    {
      $this->name = $name;
      $this->profession = $profession;
    }

    // Destructor Method
    function __destruct()
    {
      echo "My name is " . $this->name . " and My Profession is " . $this->profession;
    }
  }

  // Class Instantiate
  $person = new Person( "Md Imran Hossain", "Freelancer" );

?>