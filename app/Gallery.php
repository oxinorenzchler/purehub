<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function userGallery(){
        return $this->belongsTo('App\User');
    }
    
    public function galleryImages(){
        return $this->hasMany('App\Image');
    }
}
