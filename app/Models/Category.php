<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = ['title','icon','banner','surname','description','region'];

    public function books(){
        return $this->belongsTomany(Book::class,'book_categories');
    }


}
