<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
         'name',
        'profession',
        'photo',
        'short_desc',
        'twitter_url',
        'youtube_url',
        'linkdin_url',
        'github_url',
        'YOE',
        'PC',
        'HC',
        'resume',
    ];
}
