<?php
class registeredUser extends User
{
    protected $userName;
    protected $password;
    protected $discount = 20;
    protected $creditCards = [];

    public function __construct(string $_firstname, string $_lastname, string $_email, string $_address, string $_password){
        parent::__construct($_firstname, $_lastname, $_email, $_address);
        $this->password = $_password;
    }

    // public function setUserName($userName){
    //     return $this->userName;
    // }
    
    public function getUserName(){
        return $this->userName;
    }

    public function getPassword(){
        return $this->password;
    }
}
