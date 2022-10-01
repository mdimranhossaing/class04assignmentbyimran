<?php

  class PI {
    public static $value=3.14159;
    public function staticValue() {
      return self::$value;
    }
  }

  $pi = new PI();
  echo "PI = " . $pi->staticValue();

?> 