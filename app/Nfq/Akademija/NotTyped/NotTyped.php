<?php

namespace Nfq\Akademija\NotTyped;

class NotTyped
{
    public function calculateHomeWorkSum(...$numbers): int
    {
        $sum = 0;
        foreach ($numbers as $n) {
            $sum += $n;
        }
        return $sum;
    }
}

?>