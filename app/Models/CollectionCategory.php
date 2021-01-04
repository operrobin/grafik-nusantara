<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CollectionCategory extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'description',
        'name',
        'type_id',

    ];


    protected $dates = [
        'created_at',
        'deleted_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/collection-categories/'.$this->getKey());
    }

    public function Type() {
        return $this->hasOne('App\Models\CollectionType', 'id', 'type_id');
    }
}
