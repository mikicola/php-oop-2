<?php
class creditCard{
    private $firstname;
    private $lastname;
    private $cardNumber;
    private $expirationCreditCard;

    public function __construct($_firstname, $_lastname, $_cardNumber, $_expirationCreditCard){
        $this->firstname = $_firstname;
        $this->lastname = $_lastname;
        $this->cardNumber = $_cardNumber;
        $this->expirationCreditCard = $_expirationCreditCard;
        $this->setExpirationCreditCard ($this->expirationCreditCard);
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
    
    // public function getExpMonth(){
    //     return $this->expMonth;
    // }

    // public function getExpYear(){
    //     return $this->expYear;
    // }

    public function getExpirationCreditCard(){
        return $this->expirationCreditCard;
    }


    public function setExpirationCreditCard($expirationCreditCard){
        if (strtotime($expirationCreditCard) < strtotime('now')) {
            echo "<h2>Carta di credito scaduta</h2>";
        } else {
            echo "<h2>Carta di credito valida</h2>";
        }
    }
}
