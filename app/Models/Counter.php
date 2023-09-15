<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = [
        'text_one',
        'number_one',
        'text_two',
        'number_two',
        'text_three',
        'number_three',
        'text_four',
        'number_four'
    ];
}
