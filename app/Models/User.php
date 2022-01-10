<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    //region configModel

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'phone',
        'password',
        'verified_at',
        'verified_code',
        'type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //endregion configModel

    //region types
    const TYPE_SUPERADMIN = 'superadmin';
    const TYPE_ADMIN = 'admin';
    const TYPE_USER = 'user';

    const TYPES = [self::TYPE_SUPERADMIN , self::TYPE_ADMIN,self::TYPE_USER];

    public function bookLikes(){
        return $this->belongsToMany(Book::class,'book_likes');
    }

    public function bookFavorites(){
        return $this->belongsToMany(Book::class,'book_favourites');
    }

    public function comments(){
        return $this->hasMany(Comment::class , 'comments');
    }

    public function userInfo(){
        return $this->hasOne(UserInfo::class);
    }
}
