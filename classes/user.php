<?php
class User{
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $address;
    protected $discount = 0;
    

    public function __construct(string $_firstname, string $_lastname, string $_email){
        $this->firstname = $_firstname;
        $this->lastname = $_lastname;
        $this->email = $_email;

        return $this;
    }

    public function getFirstName(){
        return $this->firstname;
    }

    public function getLastName(){
        return $this->lastname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getAddress(){
        return $this->address;
    }
}
