<?php
  namespace Entities;
  class ArrayUtils
  {
    public static function toRemove(string $element, array &$array){
      $position = array_search($element, $array, true);

      if(is_int($position)){
        unset($array[$position]);
      }
    }
  }
?>