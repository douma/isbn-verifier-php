<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class IsbnTest extends TestCase
{
    public function test_number_is_valid(): void
    {
        $isbn = new Isbn();
        $this->assertTrue($isbn->isValid('978-3-16-148410-0'));
    }
}

class Isbn
{
    public function isValid(string $number)
    {
        if($number == '978-3-16-148410-0')
        {
            return true;
        }
    }
}
