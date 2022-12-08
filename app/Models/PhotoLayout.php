<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoLayout extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'name',
        'type',
        'img_1',
        'img_2',
        'img_3',
        'img_4',
        'img_5',
        'status'
    ];

    protected $primary = 'id';
    protected $table = 'tbl_photo_layout';
}
