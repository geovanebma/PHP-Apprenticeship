<?php
  use Entities\ArrayUtils;
  require_once "./Entities/ArrayUtils.php";

  $names = [
    "Geovane",
    "Anna",
    "Matthew",
    "Lincon",
    "Margot",
    "Mary",
    "Jason"
  ];

  ArrayUtils::toRemove("Lincon", $names);
  var_dump($names);
?>