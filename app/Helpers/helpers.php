<?php

/**
 * @param mixed $str
 * @return number
 */

if (!function_exists('moneyFormat')) {

    function moneyFormat($str) {
        return'Rp.'.number_format($str,'0','','.');
    }
    
}

/**
 * @param mixed $tanggal
 * @return date
 */

if(!function_exists('dateID')) {
    function dateID($tanggal) 
    {
        $value = Carbon\Carbon::parse($tanggal);
        $parse = $value->locale('id');
        return $parse->translatedFormat('l, d F Y');
    }
}