<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BITUMEN_EXTRACTION_GRADATION extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
    ];

    protected $table = 'bitumen_extraction_gradation';
    protected $primary_key = 'id';
}
