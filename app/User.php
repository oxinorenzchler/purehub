<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','mobile', 'password','birthdate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function gallery(){
        return $this->hasOne('App\Gallery');
    }
    public function posts(){
        return $this->hasMany('App\Post');
    }
   
    public function likes() {
        return $this->belongsToMany('App\Post','likes')->withTimestamps();
    }
    
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function profilePath(){
        return '/users/'.$this->id.'/';
    }
    public function profile(){
        return  $this->profile_picture;
    }
    public function defaultProfile(){
        return 'https://www.gravatar.com/avatar/?d=mp';
    }
    public function follows(){
        return $this->belongsTo('App\User','follows')->withTimestamps();
    }

    public function isUser(){
        return $this->role_id == 2;
    }
}
