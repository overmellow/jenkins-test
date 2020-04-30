<?php

namespace App;

class Fruit {    
    // Properties
    public $name;
    public $color;

    function __construct($name) {
        $this->name = $name;
    }    
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }
?>