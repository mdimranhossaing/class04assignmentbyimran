<?php
  class Welcome {
    public static function welcome() {
      echo "Hello Bangladesh!";
    }

    public function __construct() {
      self::welcome();
    }
  }

  new Welcome();
?> 