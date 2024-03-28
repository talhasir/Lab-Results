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

    protected $table = 'work_sheet';
    protected $primary_key = 'id';
}
