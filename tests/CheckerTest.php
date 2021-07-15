<?php declare(strict_types=1);

namespace Tests;

use App\Checker;
use PHPUnit\Framework\TestCase;

class CheckerTest extends TestCase
{
    public function testValidPalindrome(): void
    {
        self::assertTrue(Checker::isPalindrome('anna'));
        self::assertTrue(Checker::isPalindrome('ana'));
    }

    public function testInvalidPalindrome(): void
    {
        self::assertFalse(Checker::isPalindrome('annaa'));
        self::assertFalse(Checker::isPalindrome('123456'));
        self::assertFalse(Checker::isPalindrome('Bark'));
    }

    public function testValidAnagram(): void
    {
        self::assertTrue(Checker::isAnagram('hello', 'olleh'));
        self::assertTrue(Checker::isAnagram('123456', '456123'));
        self::assertTrue(Checker::isAnagram('coalface', 'cacao elf'));
    }

    public function testInvalidAnagram(): void
    {
        self::assertFalse(Checker::isAnagram('world', 'world'));
        self::assertFalse(Checker::isAnagram('world', 'worlf'));
        self::assertFalse(Checker::isAnagram('coalface', 'dark elf'));
    }

    public function testValidPangram(): void
    {
        self::assertTrue(Checker::isPangram('abcdefghijklmnopqrstuvwxyz'));
        self::assertTrue(Checker::isPangram('Waltz, bad nymph, for quick jigs vex'));
        self::assertTrue(Checker::isPangram('The quick brown fox jumps over the lazy dog'));
    }

    public function testInvalidPangram(): void
    {
        self::assertFalse(Checker::isPangram('asdfg'));
        self::assertFalse(Checker::isPangram('abcdefghijklmnopqrstuvwxy'));
        self::assertFalse(Checker::isPangram(
            'The British Broadcasting Corporation (BBC) is a British public service broadcaster.'
        ));
    }
}