<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

    public function getDateAttribute($value) {
        return date('Y-m-d', strtotime($value));
    }

    public function getFormattedDateAttribute() {
        return date('d/m/Y', strtotime($this->post_date));
    }

    protected $appends = ["formatted_date"];

}
