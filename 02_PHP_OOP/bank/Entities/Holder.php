<?php
  namespace Bank\Entities;
  use Bank\Entities\People;

  class Holder extends People{
    private string $birth_date;

    // Construction
    public function __construct(string $cpfHolder, string $nameHolder, string $birthDateHolder){
      parent::__construct($nameHolder, $cpfHolder);
      $this->birth_date    = $birthDateHolder;
    }

    //Encapsulation
    public function getBirthDate():string{
      return $this->birth_date;
    }

    // public function setBirthDate(string $date): void{
    //   $this->birth_date = $date;
    // }
  }
?>