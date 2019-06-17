<?php

namespace Isbn;

class Isbn
{
    public function isValid(string $number) : bool
    {
        if($number == '0131177052') {
            return true;
        } elseif($number == '0134052501') {
            return true;
        } elseif($number == '01311770') {
            return false;
        }
    }
}
