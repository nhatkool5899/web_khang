<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tulieu extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'photo_layout_id',
        'name',
        'description',
        'content'
    ];

    protected $primary = 'id';
    protected $table = 'tbl_tu_lieu';

    public function layout()
    {
        return $this->belongsTo(PhotoLayout::class, 'photo_layout_id');
    }
}
