<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    protected $fillable = ['movie_name','movie_desc','movie_gener','movie_img'];
}
