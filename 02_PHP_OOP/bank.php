<?php
  require_once 'Account.php';
  require_once 'Holder.php';

  $geovane = new Holder("123.456.789-10", "Geovane Barbosa", "12/05/1996");
  $firstAccount = new Account($geovane);
  $firstAccount->deposit(300);

  echo $firstAccount->getInformations();

  // echo Account::$amount_accounts;
  echo Account::getAmountAccounts();

  //To test __destruct function
  new Account(new Holder("123.456.789-11", "Test", "00/00/0000"));
  echo Account::getAmountAccounts();
?>