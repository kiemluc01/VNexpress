<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_post extends Model
{
    use HasFactory;

    protected $table = 'detail_post';
    protected $fillable = ['post_id'];
}
