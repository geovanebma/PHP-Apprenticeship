<?php
  
  namespace Bank\Entities;
  use Bank\Entities\Holder;

  class Account{
    private Holder $holder;
    private float $balance;
    //Static atribute: This is a value that will only be for that class and will not be used outside the instance.
    private static int $amount_accounts = 0;

    //Constructor
    public function __construct(Holder $holder){
      $this->holder  = $holder;
      $this->balance = 0;

      Account::$amount_accounts++;
      echo "Creating a new account!";
    }
    // public function __construct(string $cpfHolder, string $nameHolder){
    //   $this->cpf     = $cpfHolder;
    //   $this->name    = $nameHolder;
    //   $this->balance = 0;

    //   Account::$amount_accounts++;
    //   echo "Creating a new account!";
    // }

    //Destructor - Destroys an instance that is not pointed to in memory or a variable
    public function __destruct(){
      if(Account::$amount_accounts > 2){
        echo "There is more than one active account.";
      }
    }

    //Methods
    public function withdraw(float $valueToWithdraw): void{
      if($valueToWithdraw > $this->balance){
        echo "Without enought balance";
      }else{
        $this->balance -= $valueToWithdraw;
      }
    }

    public function deposit(float $valueToDeposit): void{
      if($valueToDeposit < 0){
        echo "Your balance needs to be positive.";
        return;
      }
      
      $this->balance += $valueToDeposit;
    }

    public function tranfer(float $value, Account $account): void{
      if($value > $this->balance){
        echo "Unavailable balance.";
        return;
      }

      $this->withdraw($value);
      $account->deposit($value);
    }
    
    //Encapsulation

    public function getInformations(): string{
      return "Balance: ".$this->balance.PHP_EOL."Name: ".$this->holder->getName().PHP_EOL."CPF: ".$this->holder->getCpf().PHP_EOL."Date of Birth: ".$this->holder->getBirthDate().PHP_EOL;
    }

    public static function getAmountAccounts(): string{
      return "The amount of accounts is: ".Account::$amount_accounts.".";
      // return "The amount of accounts is: ".self::$amount_accounts."."; //self = actual class
    }
  }
?>