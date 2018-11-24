<?php


namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class Helper
{
    public static function queryLog()
    {
        DB::enableQueryLog();
        return DB::getQueryLog();
    }
}
