<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Called extends Model
{
    use HasFactory;

    // protected $table = '';

    protected $fillable = [
        'employee',
        'client',
        'subject',
        'report',
        'created_at',
        'updated_at',
    ];

}
