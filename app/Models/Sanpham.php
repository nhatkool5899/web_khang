<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'danhmuc_id',
        'name',
        'slug',
        'description',
        'content',
        'price',
        'img',
        'list_img'
    ];

    protected $primary = 'id';
    protected $table = 'tbl_sanpham';

    public function danhmuc()
    {
        return $this->belongsTo(Danhmuc::class, 'danhmuc_id');
    }
}
