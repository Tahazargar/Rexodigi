<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intro extends Model
{
    protected $fillable = [
        'pre_title',
        'title',
        'image',
        'button_text',
        'button_link',
        'alt'
    ];
}
