<?php 

class Myanum
{
    static function Mm_en($digits,$locale = 'my_MM')
    {

        $en_number = range(0, 9);
        $mm_number = ['၀','၁','၂','၃','၄','၅','၆','၇','၈','၉'];

        if($locale === 'my_MM'){
            $number = str_ireplace($en_number, $mm_number, $digits);
        } else {
            $number = str_ireplace($mm_number,$en_number, $digits);
        }

        return $number;
    }
}

var_dump(Myanum::Mm_en('၁','en')); //1