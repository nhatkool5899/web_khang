<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'name'
    ];

    protected $primary = 'id';
    protected $table = 'tbl_danhmuc';
}
