<?php
class creditCard{
    private $firstname;
    private $lastname;
    private $cardNumber;
    private $expMonth;
    private $expYear;

    public function __construct($_firstname, $_lastname, $_cardNumber, $_expMonth, $_expYear){
        $this->firstname = $_firstname;
        $this->lastname = $_lastname;
        $this->cardNumber = $_cardNumber;
        $this->expMonth = $_expMonth;
        $this->expYear = $_expYear;
    }

    public function getFirstName(){
        return $this->firstname;
    }

    public function getLastName(){
        return $this->lastname;
    }

    public function getCardNumber(){
        return $this->cardNumber;
    }
    
    public function getExpMonth(){
        return $this->expMonth;
    }

    public function getExpYear(){
        return $this->expYear;
    }



    public function verifyCreditCard(){

    }
}
