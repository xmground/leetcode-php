<?php

namespace Leetcode\Easy\ReverseInteger;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    function testExamples()
    {
        $solution = new Solution();

        $this->assertEquals(321, $solution->reverse(123));
        $this->assertEquals(-321, $solution->reverse(-123));
        $this->assertEquals(21, $solution->reverse(120));

        $this->assertEquals(0, $solution->reverse(0));

        $this->assertEquals(0, $solution->reverse((2147483648)));
        $this->assertEquals(0, $solution->reverse((-2147483649)));
    }
}