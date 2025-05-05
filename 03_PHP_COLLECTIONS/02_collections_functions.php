<?php
  $values = [
    20,
    54,
    10,
    15,
    85,
    12
  ];

  sort($values);// Sort an array in ascending order
  var_dump($values);

  function alterDate($date){
    $date = explode("-", $date);// Divide the string to array by separator
    $date = array_reverse($date);// Revert the array itens
    $date = implode("/", $date);// Transform the array in string with a new separator
    var_dump($date);
  }

  alterDate("2000-01-01");

  $values2 = [
    12,
    19,
    33,
    54
  ];

  var_dump(array_diff($values, $values2));
  var_dump(array_merge($values, $values2));
  var_dump(array_combine($values, $values2));
?>