<?php
class Cart
{
    public $products = [];

    public function add($product)
    {
        $this->products[] = $product;
    }

    public function remote($delete)
    {
        unset($this->products[$delete]);
    }

    public function getTotalCost()
    {
        $sum = 0;

        foreach ($this->products as $product) {
            $sum += $product->getCost();
        }
        return $sum;
    }

    public function getTotalQuantity()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $this
        }
    }
}