<?php

// src/Service/DecimalService.php

namespace App\Service;

class DecimalService
{
    public function getIntegerPart(int $price)
    {
        $str = strval($price);
        $dec_pos = strrpos($str, '.');
        
        if($dec_pos == true)
        {
            return substr($str, 0, $dec_pos);
        }
        
        return $price;
    }
    
    public function getDecimals(int $price)
    {
        $str = strval($price);
        $dec_pos = strrpos($str, '.');
        
        if($dec_pos == true)
        {
            return substr($str, $dec_pos + 1);
        }
        
        return "00";
    }
}