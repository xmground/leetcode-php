<?php

namespace Leetcode\Easy\LongestCommonPrefix;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    function testExamples()
    {
        $solution = new Solution();

        $this->assertEquals('fl', $solution->longestCommonPrefix(['flower', 'flow', 'flight']));
        $this->assertEquals('123', $solution->longestCommonPrefix(['123flower', '123flow', '123flight', '123car', '123dog']));
        $this->assertEquals('', $solution->longestCommonPrefix(['flower', 'flow', 'rose']));
        $this->assertEquals('', $solution->longestCommonPrefix(['dog', 'racecar', 'car']));
    }
}