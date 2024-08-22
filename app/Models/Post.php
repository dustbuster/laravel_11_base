<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $table = "Posts";

    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'content',
        'user_id'
    ];
}
