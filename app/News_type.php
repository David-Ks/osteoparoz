<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News_type extends Model
{
    public $timestamps = false;

    public function news() {
        return $this->belongsTo('App\News');
    }
}
