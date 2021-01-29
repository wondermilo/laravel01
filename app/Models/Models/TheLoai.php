<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;
     protected $table = 'theloai';
     protected $fillable =[
     	'name',
     	'slug',
     	'order',
     	'status'
     ];
}
