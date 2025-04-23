<?php
  // include "06_arrays.php"; //included file - Inclui um arquivo copiando e colando no arquivo atual
  // require "06_arrays.php"; //required file - Requer um arquivo obrigatóriamente e mostrando erros de inclusão copiando e colando no arquivo atual
  require_once("06_arrays.php"); //required file - Requer um arquivo obrigatóriamente e mostrando erros de inclusão copiando e colando no arquivo atual somente 1 vez

  //Interpolation with array
  echo "Account: {$accounts['123.456.789-10']}";
?>