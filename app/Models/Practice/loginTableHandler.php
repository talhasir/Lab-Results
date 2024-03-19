<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class loginTableHandler extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'request_data',
    ];
    
    protected $table = 'users';
    protected $primary_key = 'id';

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
    
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
    
}
