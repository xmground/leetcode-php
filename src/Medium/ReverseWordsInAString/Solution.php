<?php

namespace Leetcode\Medium\ReverseWordsInAString;

class Solution
{

    /**
     * Основное решение
     *
     * @link https://leetcode.com/problems/reverse-words-in-a-string/
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {
        $words = preg_split('/ /su', $s, -1, PREG_SPLIT_NO_EMPTY);
        $words = array_reverse($words);

        return implode(' ', $words);
    }
}