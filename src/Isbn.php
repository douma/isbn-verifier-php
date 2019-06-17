<?php

namespace Isbn;

class Isbn
{
    public function isValid(string $number) : bool
    {
        $stripped = str_replace('-', '', $number);
        $length = strlen($stripped);

        if($length == 10) {
            $parts = $this->replaceXWith10(str_split($stripped));
            return (
                $parts[0] * 10  +
                $parts[1] * 9  +
                $parts[2] * 8  +
                $parts[3] * 7  +
                $parts[4] * 6  +
                $parts[5] * 5  +
                $parts[6] * 4  +
                $parts[7] * 3  +
                $parts[8] * 2  +
                $parts[9] * 1
            ) % 11 === 0;
        }
        return false;
    }

    private function replaceXWith10(array $parts) : array
    {
        return array_map(function($value){
            if($value == 'X') {
                return 10;
            }
            return $value;
        },$parts);
    }
}
