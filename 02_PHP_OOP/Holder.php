<?php
  class Holder{
    private string $cpf;
    private string $name;
    private string $birth_date;

    // Construction
    public function __construct(string $cpfHolder, string $nameHolder, string $birthDateHolder){
      $this->cpf     = $cpfHolder;
      $this->name    = $nameHolder;
      $this->birth_date    = $birthDateHolder;
    }

    //Encapsulation
    public function getCpf():string{
      return $this->cpf;
    }

    public function getName():string{
      return $this->name;
    }

    public function getBirthDate():string{
      return $this->birth_date;
    }

    // public function setBirthDate(string $date): void{
    //   $this->birth_date = $date;
    // }
  }
?>