<?php 

class MmConverter
{
    /**
     * Convert Myanmar <=> English string.
     *
     * @param  string $digits
     * @return string
     */
    
    static function Number($digits, $locale = 'my_MM')
    {

        $en_number = range(0, 9);
        $mm_number = ['၀','၁','၂','၃','၄','၅','၆','၇','၈','၉'];

        if($locale === 'my_MM'){
            $number = str_ireplace($en_number, $mm_number, $digits);
        } elseif($locale === 'en') {
            $number = str_ireplace($mm_number,$en_number, $digits);
        }

        return $number;
    }
}

var_dump(MmConverter::Number('1234','my_MM')); //1234