<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by',
        'created_for',
        'name',
        'gender',
        'age',
        'material_status',
        'religion',
        'nationality',
        'city',
        'address',
        'mobile',
        'pic',
        'occupation',
        'qualification',
        'status',
    ];
}
