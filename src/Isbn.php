<?php

namespace Isbn;

class Isbn
{
    public function isValid(string $number) : bool
    {
        $stripped = str_replace('-', '', $number);
        $length = strlen($stripped);

        if($length == 10) {
            return (
                $stripped[0] * 10  +
                $stripped[1] * 9  +
                $stripped[2] * 8  +
                $stripped[3] * 7  +
                $stripped[4] * 6  +
                $stripped[5] * 5  +
                $stripped[6] * 4  +
                $stripped[7] * 3  +
                $stripped[8] * 2  +
                $stripped[9] * 1
            ) % 11 === 0;
        }
        return false;
    }
}
