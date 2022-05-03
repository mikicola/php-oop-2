<?php
class creditCard{
    private $name;
    private $lastname;
    private $cardNumber;
    private $expMonth;
    private $expYear;

    public function __construct($name, $lastname, $cardNumber, $expMonth, $expYear){
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->cardNumber = $_cardNumber;
        $this->expMonth = $_expMonth;
        $this->expYear = $_expYear;
    }

    public function verifyCreditCard(){

    }
}
