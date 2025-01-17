<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    /** @use HasFactory<\Database\Factories\PolicyFactory> */
    use HasFactory;
    protected $fillable=[
        'type',
        'description'
    ];
}
