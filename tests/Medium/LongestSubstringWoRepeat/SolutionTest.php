<?php

namespace Leetcode\Medium\LongestSubstringWoRepeat;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    function testExamples()
    {
        $solution = new Solution();

        $this->assertEquals(3, $solution->lengthOfLongestSubstring('abcabcbb'));
        $this->assertEquals(3, $solution->lengthOfLongestSubstringAlt('abcabcbb'));
        $this->assertEquals(1, $solution->lengthOfLongestSubstring('bbbbb'));
        $this->assertEquals(1, $solution->lengthOfLongestSubstringAlt('bbbbb'));
        $this->assertEquals(3, $solution->lengthOfLongestSubstring('pwwkew'));
        $this->assertEquals(3, $solution->lengthOfLongestSubstringAlt('pwwkew'));
    }
}