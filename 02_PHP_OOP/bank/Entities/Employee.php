<?php
  namespace Bank\Entities;
  use Bank\Entities\People;
  use Bank\Entities\Authenticatable;

  final class Employee extends People implements Authenticatable{
    private string $position;

    public function __construct(string $name, string $cpf, string $position){
      parent::__construct($name, $cpf);
      $this->position = $position;
    }

    public function getPosition():string{
      return $this->position;
    }

    protected function verifyCPF(string $cpf): bool{
      $cpf = preg_replace('/[^0-9]/', '', $cpf);

      if (strlen($cpf) != 11) {
          return false;
      }

      if (preg_match('/^(\d)\1{10}$/', $cpf)) {
          return false;
      }

      for ($t = 9; $t < 11; $t++) {
          $soma = 0;
          for ($i = 0; $i < $t; $i++) {
              $soma += $cpf[$i] * (($t + 1) - $i);
          }
          $digito = ((10 * $soma) % 11) % 10;
          if ($cpf[$t] != $digito) {
              return false;
          }
      }

      return true;
    }

    public function canAuthenticate(string $password):bool{
      return $password === "1234";
    }
  }
?>