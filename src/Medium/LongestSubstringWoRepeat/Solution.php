<?php

namespace Leetcode\Medium\LongestSubstringWoRepeat;

class Solution
{

    /**
     * Основное решение
     *
     * @link https://leetcode.com/problems/longest-substring-without-repeating-characters/
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring(string $s): int
    {
        $stack = [];
        $length = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            if (in_array($s[$i], $stack)) {
                $length = ($length < count($stack)) ? count($stack) : $length;
                $stack = [];
                $stack[] = $s[$i];
            } else {
                $stack[] = $s[$i];
            }
        }

        return ($length < count($stack)) ? count($stack) : $length;
    }

    /**
     * Альтернативное решение
     *
     * @link https://leetcode.com/problems/longest-substring-without-repeating-characters/
     * @param string $s
     * @return int
     */
    function lengthOfLongestSubstringAlt(string $s): int
    {
        $stack = [];
        $length = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            if (in_array($s[$i], $stack)) {
                $stack = [];
                $stack[] = $s[$i];
            } else {
                $stack[] = $s[$i];
            }

            if ($length < count($stack)) {
                $length = count($stack);
            }
        }

        return $length;
    }
}