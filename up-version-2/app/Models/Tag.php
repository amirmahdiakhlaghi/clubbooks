<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = "tags";

    protected $fillable = ['title'];

    public function books(){
        return $this->belongsToMany(Book::class,'book_tags');
    }

    public function toArray()
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title
        ];
    }
}
