<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class mainwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'workid',
        'keyword',
        'worklink',
        'workDetails',
        'point',
        'date',
        'search_site_img',
        'link_click_count',
        'added_by',
        'status',
        'user_id',
    ];


     public function profChecking(): HasOne
    {
       return $this->hasOne(profwork::class, 'mainworkid', 'id');
    }
}
