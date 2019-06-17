<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class IsbnTest extends TestCase
{
    public function test_number_is_valid(): void
    {
        $isbn = new \Isbn\Isbn();
        $this->assertTrue($isbn->isValid('0131177052'));
        $this->assertTrue($isbn->isValid('0134052501'));
        $this->assertTrue($isbn->isValid('3-598-21508-8'));
    }

    public function test_number_is_invalid(): void
    {
        $isbn = new \Isbn\Isbn();
        $this->assertFalse($isbn->isValid('01311770'));
    }

    public function test_number_invalid_for_length_10(): void
    {
        $isbn = new \Isbn\Isbn();
        $this->assertFalse($isbn->isValid('3-598-21508-7'));
    }

    public function test_number_with_x()
    {
        $isbn = new \Isbn\Isbn();
        $this->assertTrue($isbn->isValid('3-598-21507-X'));
    }
}
