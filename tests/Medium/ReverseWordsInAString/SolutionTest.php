<?php

namespace LeetCode\Medium\ReverseWordsInAString;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    function testExamples()
    {
        $solution = new Solution();

        $this->assertEquals('blue is sky the', $solution->reverseWords('the sky is blue'));
        $this->assertEquals('world! hello', $solution->reverseWords('  hello world!  '));
        $this->assertEquals('example good a', $solution->reverseWords('a good   example'));

    }
}