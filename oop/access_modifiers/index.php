<?php 

  class Shop {
    // Propertises
    public $shop_name = "Express Computer & Mobile";
    protected $product = "Computer, Laptop, Tablet, Mobile";
    private $product_price = "$100, $150, $120, $70";

    // Public Method
    function shop_name() {
      return $this->shop_name;
    }

    // Protected Method
    protected function product() {
      return $this->product;
    }

    // Private Method
    private function product_price() {
      return $this->product_price;
    }
  }

  // Class Instantiate
  $shop = new Shop();

  // Show Properties
  echo $shop->shop_name(); // OK, Because this is public Method.
  echo $shop->product(); // ERROR, Because this is protected Method.
  echo $shop->product_price(); // ERROR, Because this is private Method.

?>