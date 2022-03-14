<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'text', 'img', 'service_type_id'];
    public $timestamps = false;
    
    public function service_type() {
        return $this->hasOne('App\Service_type', 'id', 'service_type_id');
    }
}
