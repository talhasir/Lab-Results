<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConcreteCompressModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
    ];
    
    protected $table = 'concrete_compress';
    protected $primary_key = 'id';

    
}
