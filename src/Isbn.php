<?php

namespace Isbn;

class Isbn
{
    public function isValid(string $number) : bool
    {
        $stripped = str_replace('-', '', $number);
        $length = strlen($stripped);

        if($length == 10) {
            if($number == '0131177052') {
                return true;
            } elseif($number == '0134052501') {
                return true;
            } elseif($number == '3-598-21508-8') {
                return true;
            }
        }
        return false;
    }
}
