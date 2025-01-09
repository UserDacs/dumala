<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{
    use HasFactory;

    protected $fillable = [
        'announcement_type',
        'marriage_bann',
        'groom_name',
        'bride_name',
        'groom_age',
        'bride_age',
        'groom_address',
        'bride_address',
        'groom_parents',
        'bride_parents',
        'parent',
        'status',
    ];
}
