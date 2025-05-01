<?php
  namespace Bank\Entities;
  use Bank\Entities\People;
  use Bank\Entities\Authenticatable;

  final class Holder extends People implements Authenticatable{
    private string $birth_date;

    // Construction
    public function __construct(string $cpf, string $name, string $birthDateHolder){
      parent::__construct($name, $cpf);
      var_dump($this->verifyCPF($cpf));
      $this->birth_date = $birthDateHolder;
    }

    //Encapsulation
    public function getBirthDate():string{
      return $this->birth_date;
    }

    // public function setBirthDate(string $date): void{
    //   $this->birth_date = $date;
    // }

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

    final public function canAuthenticate(string $password):bool{
      return $password === "4321";
    }
  }
?>