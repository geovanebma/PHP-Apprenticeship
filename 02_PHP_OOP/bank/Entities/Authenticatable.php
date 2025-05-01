<?php
  namespace Bank\Entities;

  interface Authenticatable{
    public function canAuthenticate(string $password):bool;
  }
?>