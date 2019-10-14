<?php

namespace Nfq\Akademija\Soft;

class Soft
{
    public function calculateHomeWorkSum(int...$numbers): int
    {
        $sum = 0;
        foreach ($numbers as $n) {
            $sum += $n;
        }
        return $sum;
    }
}

?>