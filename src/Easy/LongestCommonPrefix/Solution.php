<?php

namespace Leetcode\Easy\LongestCommonPrefix;


class Solution
{

    /**
     * Основное решение
     *
     * @link https://leetcode.com/problems/longest-common-prefix/
     * @param array $strs
     * @return string
     */
    function longestCommonPrefix(array $strs): string
    {
        $longestPrefix = $strs[0];

        foreach ($strs as $str) {
            while (preg_match("/^{$longestPrefix}/siu", $str) !== 1) {
                $longestPrefix = substr($longestPrefix, 0, strlen($longestPrefix) - 1);
            }
            if ($longestPrefix === '') {
                return '';
            }
        }

        return $longestPrefix;
    }

}
