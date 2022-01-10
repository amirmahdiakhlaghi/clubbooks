<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    protected $table = "writers";

    protected $fillable = ['name','description','image'];

    public static function search($name){
        $name = static::where('name' , 'like' ,'%' . $name . '%')->get();
        return $name;
    }
    public function books(){
        return $this->hasMany(Book::class);
    }

}