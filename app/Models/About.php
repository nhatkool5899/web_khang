<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'title_1',
        'text_1',
        'text_2',
        'text_3',
        'text_4',
        'text_5',
        'img_1',
        'img_2',
        'img_3',
    ];

    protected $primary = 'id';
    protected $table = 'tbl_about';
}
