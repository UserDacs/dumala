<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liturgical extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'requirements',
        'stipend',
        'status',
    ];
}
