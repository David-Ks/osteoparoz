<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team_type extends Model
{
    public $timestamps = false;

    public function Team() {
        return $this->belongsTo('App\Team');
    }
}
