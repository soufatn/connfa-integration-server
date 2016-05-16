<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Point extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'image_url',
        'detail_url',
    ];
}