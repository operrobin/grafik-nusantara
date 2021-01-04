<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CollectionType extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'description',
        'name',
    
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
        return url('/admin/collection-types/'.$this->getKey());
    }
}
