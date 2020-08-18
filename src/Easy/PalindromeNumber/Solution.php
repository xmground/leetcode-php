<?php

namespace Leetcode\Easy\PalindromeNumber;

class Solution
{

    /**
     * Основное решение
     *
     * @link https://leetcode.com/problems/palindrome-number/
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome(int $x): bool
    {
        return (string)$x === strrev((string)$x);
    }

    /**
     * Алтернативный вариант решения
     *
     * @link https://leetcode.com/problems/palindrome-number/
     * @param Integer $x
     * @return Boolean
     */
    function isPalindromeAlt(int $x): bool
    {
        $nums = [];

        while ($x > 0) {
            $nums[] = $x % 10;
            $x = intdiv($x, 10);
        }

        return ($x === 0) && ($nums === array_reverse($nums));
    }
}
