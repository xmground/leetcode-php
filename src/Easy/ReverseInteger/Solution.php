<?php

namespace Leetcode\Easy\ReverseInteger;

class Solution
{

    /**
     * Основное решение
     *
     * @link https://leetcode.com/problems/reverse-integer/
     * @param Integer $x
     * @return Integer
     */
    function reverse(int $x): int
    {
        if (($x < -2147483648) || ($x > 2147483647)) {
            return 0;
        }

        $multiplier = ($x < 0) ? -1 : 1;

        $reversed = strrev((string)$x);

        return (int)$reversed * $multiplier;
    }
}
