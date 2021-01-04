<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = [
        'name',
        'type',
        'content',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/configs/'.$this->getKey());
    }

    public static function getContent($name) {
        $data = self::where('name', $name)->first();

        if ($data) {
            return $data->content;
        }

        return "";
    }
}
