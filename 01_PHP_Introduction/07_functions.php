<?php
  include "06_arrays.php";

  //Function with return
  function withdraw($array_accounts, $index, $value){
    $array_accounts[$index]["balance"] -= $value;
    return $array_accounts;
  }

  //Function with reference
  //This commercial &, means that the variable $array_accounts is not a copy of memory, but the original address 
  function deposit(array &$array_accounts, $index, $value = 0){
    $array_accounts[$index]["balance"] += $value;
    return $array_accounts;
  }

  //Function without return
  function remove_account(array &$array_accounts, $index){
    unset($array_accounts[$index]);
  }


  $return = withdraw($accounts, "123.456.789-10", 300);
  var_dump($return);
?>