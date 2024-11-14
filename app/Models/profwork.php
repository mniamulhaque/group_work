<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'mainworkid',
        'date',
        'checking_code',
        'father_name',
        'completed_code',
        'completed_code_update_time',
        'add_show_quantity',
        'point',
        'prof_img_one',
        'prof_img_two',
        'user_id',
    ];

}
