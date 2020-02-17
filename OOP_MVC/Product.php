<?php
class Product
{
    private $name;
    private $price;
    private $quantity;

    public function getCost()
    {
        return $this->price * $this->quantity;
    }

}



