<?php

namespace Leetcode\Medium\LongestPalindromicSubstring;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    public function testExamples()
    {
        $solution = new Solution();

        $this->assertEquals('bab', $solution->longestPalindrome('babad'));
        $this->assertEquals('bb', $solution->longestPalindrome('cbbd'));
        $this->assertEquals('saippuakivikauppias', $solution->longestPalindrome('hsaesigeujxmakiboqrmucsaippuakivikauppiasowomxgezikqrhidyob'));
        $this->assertEquals('neveroddoreven', $solution->longestPalindrome('neveroddoreven'));
        $this->assertEquals('', $solution->longestPalindrome(''));
    }

}