<?php
  //While
  $cont = 1;

  while($cont <= 15){
    echo "Actual cont: $cont".PHP_EOL;
    $cont++;
  }

  //For
  for ($i=0; $i <= 15; $i++) { 
    if($i == 15){
      echo "Final index: $i".PHP_EOL;
    }else{
      echo "Actual index: $i".PHP_EOL;
    }
  }
?>