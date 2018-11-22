<?php

namespace App\Models;

use App\BaseModel;

class City extends BaseModel
{
    public $collection = 'cities';
    protected $guarded = [];

    public static function SCHEMAS()
    {
        return [
            'code' => ['type' => 'string', 'default' => null],
            'lang_code' => ['type' => 'string', 'default' => null],
            'name' => ['type' => 'string', 'default' => null],
            'name_ascii' => ['type' => 'string', 'default' => null],
            'url_alias' => ['type' => 'string', 'default' => null],
            'description' => ['type' => 'string', 'default' => null],
            'weight' => ['type' => 'int', 'default' => null],
            'status' => ['type' => 'int', 'default' => 0],
            'owner' => ['type' => 'string', 'default' => null],
            'district' => ['type' => 'array(string)'],
        ];
    }
}
