<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailConfig extends Model
{
    protected $fillable = [
        'driver',
        'email',
        'encryption',
        'host',
        'password',
        'port',
        'username',
    
    ];
    
    protected $hidden = [
        'password',
    
    ];
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/email-configs/'.$this->getKey());
    }
}
