<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    // Relación de many to one
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    // Relación de many to one
    public function image(){
        return $this->belongsTo('App\Image', 'image_id');
    }

}
