<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class call extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'requester', 'date_opened', 'status'];

    protected $casts = [
        'date_opened' => 'date',
    ];
}
