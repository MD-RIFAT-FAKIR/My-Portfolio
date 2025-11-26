<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    //
     protected $fillable = [
        'title',
        'sub_title',
        'service_category_id',
        'photo',
        'url',
    ];
}
