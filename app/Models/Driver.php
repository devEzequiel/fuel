<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'document',
        'birth_date',
        'cnh_number',
        'cnh_category',
        'status'
    ];
}
