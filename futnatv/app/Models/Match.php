<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function channels(){
        return $this->belongsToMany('App\Models\Channel');
    }

    public function getDateAttribute($value) {
        return date('Y-m-d\TH:i:s', strtotime($value));
    }

    public function getFormattedDataAttribute() {
        return date('d/m/y H:i:s', strtotime($this->date));
    }

    protected $appends = ["formatted_date"];

}
