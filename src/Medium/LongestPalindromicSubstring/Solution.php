<?php

namespace Leetcode\Medium\LongestPalindromicSubstring;

class Solution
{
    /**
     * Основное решение
     *
     * @link https://leetcode.com/problems/longest-palindromic-substring/
     * @param String $s
     * @return String
     */
    function longestPalindrome(string $s): string
    {
        $longestPalindrome = '';
        for ($start = 0; $start < strlen($s); $start++) {
            $currentWord = '';
            for ($i = $start; $i < strlen($s); $i++) {
                $currentWord .= $s[$i];
                if (($currentWord === strrev($currentWord)) && (strlen($longestPalindrome) < strlen($currentWord))) {
                    $longestPalindrome = $currentWord;
                }
            }
        }

        return $longestPalindrome;
    }
}
