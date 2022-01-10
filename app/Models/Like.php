<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = "book_likes";

    protected $fillable = ['user_id','book_id'];

    use HasFactory;
}
