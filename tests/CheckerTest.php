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
    }

    public function testValidAnagram(): void
    {
        self::assertTrue(Checker::isAnagram('hello', 'olleh'));
        self::assertTrue(Checker::isAnagram('123456', '456123'));
    }

    public function testInvalidAnagram(): void
    {
        self::assertFalse(Checker::isAnagram('world', 'world'));
        self::assertFalse(Checker::isAnagram('world', 'worlf'));
    }

    public function testValidPangram(): void
    {

    }

    public function testInvalidPangram(): void
    {

    }
}