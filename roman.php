<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of roman
 *
 * @author Diego
 */
class roman {

    public function convertDigit($arabicNumberToConvert, $one, $five, $ten) {
        $romanNumber = "";
        if ($arabicNumberToConvert > 0 && $arabicNumberToConvert <= 3) {
            for (; $arabicNumberToConvert > 0; $arabicNumberToConvert--) {
                $romanNumber .= $one;
            }
        } elseif ($arabicNumberToConvert == 4) {
            $romanNumber = "{$one}{$five}";
        } elseif ($arabicNumberToConvert >= 5 && $arabicNumberToConvert < 9) {
            $romanNumber = $five;
            for (; $arabicNumberToConvert > 5; $arabicNumberToConvert--) {
                $romanNumber .= $one;
            }
        } elseif ($arabicNumberToConvert == 9) {
            $romanNumber = "{$one}{$ten}";
        }
        return $romanNumber;
    }

    public function convertToRoman($arabicNumberToConvert) {
        $romanNumber = "";
        $thousands = (int) ($arabicNumberToConvert / 1000);
        $hundreds = (int) ($arabicNumberToConvert / 100);
        $tens = (int) ($arabicNumberToConvert / 10) % 10;
        $romanNumber .= $this->convertDigit($thousands, "M", "", "");
        $romanNumber .= $this->convertDigit($hundreds, "C", "D", "M");
        $romanNumber .= $this->convertDigit($tens, "X", "L", "C");
        $romanNumber .= $this->convertDigit($arabicNumberToConvert % 10, "I", "V", "X");
        return $romanNumber;
    }
    
    public function foo($param) {
        $var = 0;
    }
    
    public function foo2($param) {
        $var = 0;
    }
    
    public function foo3($param) {
        $var = 0;
    }
    
    public function foo4($param) {
        $var = 0;
    }

}
