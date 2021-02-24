<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Slider
{
    public static function View()
    {
        $res = DB::table('slider')->where('status', 1)->orderBy('sort', 'asc')->get();
        return $res;
    }
}
