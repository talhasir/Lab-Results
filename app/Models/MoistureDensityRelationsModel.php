<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoistureDensityRelationsModel
 extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
    ];

    protected $table = 'moisture_content_astm_d1557';
    protected $primary_key = 'id';
}
