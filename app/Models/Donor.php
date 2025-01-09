<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = [
        'announcement_type',
        'project_name',
        'donor_name',
        'donated_amount',
        'parent',
        'short',
        'status',
    ];
}
