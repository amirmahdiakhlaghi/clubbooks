<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = ['user_id','book_id','parent_id','content'];

    public function book(){
        return $this->belongsTo(Book::class,'book_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
