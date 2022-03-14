<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_type extends Model
{
    protected $fillable = ['title', 'text', 'img'];
    public $timestamps = false;

    public function service() {
        return $this->belongsTo('App\Service');
    }
}
