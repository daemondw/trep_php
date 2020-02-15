<?php
class AvgHelper
{
    private $sumHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper();
    }

    public function getAvg($arr)
    {
        return $this->sumHelper->getSum1($arr) / count($arr);
    }

    public function getMeanSquare($arr)
    {
        return sqrt($this->sumHelper->getSum2($arr)) / count($arr);
    }
}