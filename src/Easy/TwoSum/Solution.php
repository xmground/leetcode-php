<?php

namespace Leetcode\Easy\TwoSum;

class Solution
{

    /**
     * Основное решение
     *
     * @link https://leetcode.com/problems/two-sum/
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum(array $nums, int $target): array
    {
        foreach ($nums as $key => $num) {
            if (($num < $target) && in_array($target - $num, $nums)) {
                return [$key, array_flip($nums)[$target - $num]];
            }
        }

        return [];
    }
}