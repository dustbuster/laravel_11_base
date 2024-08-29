<?php
namespace App\LeetCode;

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function rotatedDigits($n) {
        $result = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($this->isGoodNumber($i)) {
                $result++;
            }
        }
        return $result;
    }
    
    function isGoodNumber($n) {
        $rotation_map = [
            '0' => '0',
            '1' => '1',
            '8' => '8',
            '2' => '5',
            '5' => '2',
            '6' => '9',
            '9' => '6',
        ];
        
        $original_str = strval($n);
        $rotated_str = '';
        $hasDifferentDigit = false;

        for ($i = 0; $i < strlen($original_str); $i++) {
            $digit = $original_str[$i];
            if (!isset($rotation_map[$digit])) {
                return false; // Contains an invalid digit like 3, 4, or 7
            }
            $rotated_str .= $rotation_map[$digit];
            if ($rotation_map[$digit] !== $digit) {
                $hasDifferentDigit = true;
            }
        }

        return $hasDifferentDigit;
    }
}
