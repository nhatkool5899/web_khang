<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerHome extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'vitri',
        'img',
    ];

    protected $primary = 'id';
    protected $table = 'tbl_banner_home';
}
