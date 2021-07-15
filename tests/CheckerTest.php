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

    }

    public function testInvalidAnagram(): void
    {

    }

    public function testValidPangram(): void
    {

    }

    public function testInvalidPangram(): void
    {

    }
}