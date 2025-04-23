<?php
  $age = 28;

  if($age >= 18){
    echo "You can enter!";
  }else if ($age >= 16 && $age < 18){
    echo "You can enter, if you are accompanied!";
  }else{
    echo "You can't enter!";
  }
?>