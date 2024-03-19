<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkSheetModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
    ];

    protected $table = 'worksheetforbituminous';
    protected $primary_key = 'id';
}
