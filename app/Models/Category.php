<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Category
{
    public static function GetMainCatMenu()
    {
        $result = DB::table('category')->where('status', 1)->get();

        $return = [];
        foreach ($result as $value) {
            if ($value->pid == 0) {
                $return[$value->id] = $value;
            } else {
                $return[$value->pid]->childs[] = $value;
            }
        }

        return $return;
    }
}
