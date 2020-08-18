<?php

namespace Leetcode\Easy\TwoSum;

use PHPUnit\Framework\TestCase;
use Leetcode\Easy\TwoSum\Solution;

class SolutionTest extends TestCase
{
    function testExamples()
    {
        $solution = new Solution();

        $this->assertEquals([0, 1], $solution->twoSum([2, 7, 11, 15], 9));
    }
}