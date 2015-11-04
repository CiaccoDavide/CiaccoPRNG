<?php

  namespace ciacco_PRNG;
  
  class CiaccoPRNG {
  
    private static $tree = 0;
    
    // set seed
    public static function seed($seed = 0) {
      self::$tree = abs(intval($seed)) % 9999999+1;
      self::getRand();
    }
    
    // get a random int between $min and $max [both included]
    public static function getRand($min = 0, $max = 9999999) {
      self::$tree = (self::$tree * 123) % 69522569;
      return self::$tree % ($max - $min + 1) + $min;
    }
    
  }
?>
