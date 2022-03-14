<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'skill', 'img', 'team_type_id'];

    public $timestamps = false;

    public function team_type() {
        return $this->hasOne('App\Team_type', 'id', 'team_type_id');
    }
}
