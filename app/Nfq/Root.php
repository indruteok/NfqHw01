<?php

namespace Nfq;

class Root
{
    public function calculateHomeWorkSum(...$numbers)
    {
        $sum = 0;
        foreach ($numbers as $n) {
            $sum += $n;
        }
        return $sum;
    }
}

?>
