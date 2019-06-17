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
    }

    public function test_number_is_invalid(): void
    {
        $isbn = new \Isbn\Isbn();
        $this->assertFalse($isbn->isValid('01311770'));
    }
}
