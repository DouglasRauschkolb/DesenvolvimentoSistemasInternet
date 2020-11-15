<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    public function matches(){
        return $this->belongsToMany('App\Models\Match');
    }
}
