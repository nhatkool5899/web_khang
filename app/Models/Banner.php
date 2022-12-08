<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'name',
        'img',
    ];

    protected $primary = 'id';
    protected $table = 'tbl_banner';
}
