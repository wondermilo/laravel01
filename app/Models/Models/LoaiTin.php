<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    use HasFactory;
    protected $table = 'loaitin';
    protected $fillable = [
    	'id',
        'name',
        'slug',
        'order',
        'status',
        'theloai_id'
    ];
                 
}
