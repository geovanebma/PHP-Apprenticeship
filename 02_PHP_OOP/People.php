<?php
    //Class to Heritage
  class People{
    //Protected, do that only the children class inherit the father's attributes
    protected string $name;
    protected string $cpf;

    public function __construct(string $name, string $cpf){
      $this->name = $name;
      $this->cpf = $cpf;
    }

    public function getName():string{
      return $this->name;
    }

    public function setName(string $name):void{
      $this->name = $name;
    }

    public function getCpf():string{
      return $this->cpf;
    }

    public function setCpf(string $cpf):void{
      $this->cpf = $cpf;
    }
  }
  
?>