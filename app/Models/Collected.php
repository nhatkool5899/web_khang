<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collected extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'photo_layout_id',
        'name',
        'description',
        'imgs',
    ];

    protected $primary = 'id';
    protected $table = 'tbl_collected';

    public function layout()
    {
        return $this->belongsTo(PhotoLayout::class, 'photo_layout_id');
    }
}
