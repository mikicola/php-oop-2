<?php

class order{
    protected $user;
    protected $products = [];
    protected $creditCard;

    public function __construct($user, $products, $creditCard){
        $this->user = $_user;
        $this->products = $_products;
        $this->creditCard = $_creditCard;
    }
}
