<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Mindedge\Mixer\Support\Str;

/**
 * @testdox A bank account
 */
class StringTest extends TestCase {
    
    public function testStartsWithDoesNotAllowEmptyStrings(){
        $emptyString = '';
        $result = Str::startsWith($emptyString, $emptyString);
        $this->assertFalse($result);
    }

    public function testStartsWithAllowsSubstringMatches(){
        $haystack = 'startswith';
        $needle = 'start';
        $shouldMatch = Str::startsWith($haystack, $needle);
        $this->assertTrue($shouldMatch);
    }
}