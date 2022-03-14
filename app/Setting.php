<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['text', 'block_id'];
    public $timestamps = false;
}
