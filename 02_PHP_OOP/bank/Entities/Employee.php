<?php
  namespace Bank\Entities;
  use Bank\Entities\People;

  class Employee extends People{
    private string $position;

    public function __construct(string $name, string $cpf, string $position){
      parent::__construct($name, $cpf);
      $this->position = $position;
    }

    public function getPosition():string{
      return $this->position;
    }
  }
?>