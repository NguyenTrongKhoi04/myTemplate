<?php

namespace App\Helpers;

use Carbon\Carbon;

class Format
{
    public static function date(string $date, string $format_date = 'Y-m-d'): string
    {
        if(!$date){
            return '';
        }
        return Carbon::parse($date)->format($format_date);
    }
}
