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
        if($valueRegion == 'بلند'){
            $valueRegion = 'بلند';
        }
        else{
            $valueRegion = 'کوتاه';
        }
        return $valueRegion;
    }

}
