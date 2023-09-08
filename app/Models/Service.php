<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'image',
        'pre_title',
        'title',
        'box_one_title',
        'box_one_description',
        'box_one_button_text',
        'box_one_button_link',
        'box_two_title',
        'box_two_description',
        'box_two_button_text',
        'box_two_button_link',
        'box_three_title',
        'box_three_description',
        'box_three_button_text',
        'box_three_button_link',
        'box_four_title',
        'box_four_description',
        'box_four_button_text',
        'box_four_button_link',
    ];
}
