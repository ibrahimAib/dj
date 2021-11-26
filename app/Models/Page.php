<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'name_ar',
        'code',
        'description',
        'description_ar',
        'img_path_1',
        'img_path_2',
        'img_path_3',
        'img_path_4',
        'img_path_5',
        'img_path_6',
        'img_path_7',
        'img_path_8',
        'img_path_9',
        'img_path_10',
        'img_path_11',
    ];
}
