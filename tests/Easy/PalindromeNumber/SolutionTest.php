<?php

namespace Leetcode\Easy\PalindromeNumber;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    function testExamples()
    {
        $solution = new Solution();

        $this->assertEquals(true, $solution->isPalindrome(121));
        $this->assertEquals(true, $solution->isPalindromeAlt(121));
        $this->assertEquals(true, $solution->isPalindrome(123321));
        $this->assertEquals(true, $solution->isPalindromeAlt(123321));
        $this->assertEquals(false, $solution->isPalindrome(-121));
        $this->assertEquals(false, $solution->isPalindromeAlt(-121));
        $this->assertEquals(false, $solution->isPalindrome(10));
        $this->assertEquals(false, $solution->isPalindromeAlt(10));
    }

}