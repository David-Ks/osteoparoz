<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = ['icon', 'title', 'url'];
    public $timestamps = false;
}
