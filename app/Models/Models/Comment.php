<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
     protected $stable = 'comment';
     protected $fillable = [
        'name',
        ' email',
        'content',
        'tin_id'

       ];

}
