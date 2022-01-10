<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    use HasFactory;

    protected $table = "books";

    protected $fillable = ['writer_id','h_title','top_title','content','price','entesharat','translator','slug','image','t_image','banner','alt_image','criticism','size','region'];

    public function writer(){
        return $this->belongsTo(Writer::class,'writer_id','id');
    }
    public function categories(){
        return $this->belongsToMany(Category::class,'book_categories');
    }

    public function userLikes(){
        return $this->belongsToMany(User::class,'book_likes');
    }

    public function userFavorites(){
        return $this->belongsToMany(User::class,'book_favourites');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'comments');
    }

    public function getRegionAttribute(){
        $valueRegion = $this->attributes['region'];
        if($valueRegion == 'other'){
            $valueRegion = 'خارجی';
        }
        else{
            $valueRegion = 'ایرانی';
        }
        return $valueRegion;
    }

    public function getSizeAttribute(){
        $valueRegion = $this->attributes['size'];
        if($valueRegion == 'long'){
            $valueRegion = 'بلند';
        }
        else{
            $valueRegion = 'کوتاه';
        }
        return $valueRegion;
    }
}