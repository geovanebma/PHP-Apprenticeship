<?php

  //Array
  $age_list = [25, 29, 10, 15, 63, 17];
  $a_age = $age_list[3];
  print $a_age;

  for ($i=0; $i < count($age_list); $i++) { 
    echo $age_list[$i];
  }

  //Associative array
  $accounts = [
    "123.456.789-10" => [
      "holder" => "Geovane",
      "balance" => 1000
    ],
    "123.456.789-11" => [
      "holder" => "Ana",
      "balance" => 1200
    ],
    "123.456.789-12" => [
      "holder" => "Erick",
      "balance" => 800
    ]
  ];

  //Foreach
  foreach ($accounts as $key => $value) {
    echo $key.": ".$value["holder"];
  }
?>