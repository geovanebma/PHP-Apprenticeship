<?php
  $subjects = array(
    "Chemical" => 7,
    "History" => 6,
    "Math" => 10,
    "English" => 9,
    "Geography" => 9
  );

  function takeAverage($subjects){
    if(count($subjects) > 0 && is_array($subjects)){
      $sum_subjects = 0;
      $average = count((array) $subjects);
  
      foreach ($subjects as $key => $value) {
        $sum_subjects += $value;
      }
  
      return $sum_subjects/$average;
    }else{
      return "Without definition.";
    }
  }

  foreach ($subjects as $key => $value) {
    echo "In this subject (".$key.") you got ".$value.PHP_EOL;
  }

  echo "The average is:".takeAverage($subjects);
?>