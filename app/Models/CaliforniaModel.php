<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaliforniaModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
    ];

    protected $table = 'clifornia';
    protected $primary_key = 'id';
}
