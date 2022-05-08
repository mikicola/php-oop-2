<?php

class order{
    protected $user;
    protected $products = [];
    protected $creditCard;

    public function __construct($_user, $_products, $_creditCard){
        $this->user = $_user;
        $this->products = $_products;
        $this->creditCard = $_creditCard;
    }
}
