<?php
class Arr2
{
    private $numbers = []; // массив чисел

    // Добавляем число в массив:
    public function add($number)
    {
        $this->numbers[] = $number;
        return $this; // вернем ссылку сами на себя
    }

    public function append($arrOfNumbers)
    {
        $this->numbers = array_merge($arrOfNumbers, $this->numbers);
        return $this;
    }

    // Находим сумму чисел:
    public function getSum()
    {
        return array_sum($this->numbers);
    }
}