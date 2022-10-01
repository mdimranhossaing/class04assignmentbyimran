<?php 

  class Users {

    // Constants
    const EMAIL = "mdimranhossaingd@gmail.com";
    const PASSWORD = "123456";

    // Method
    public function user() {
      return self::PASSWORD;
    }
  }

  // Show Constant
  echo "User email: " . Users::EMAIL . "<br><br>";
  
  // Class Instantiat
  $user_pass = new Users();
  echo "User Password: " . $user_pass->user();
  

?>