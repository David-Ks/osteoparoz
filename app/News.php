<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'text', 'img', 'news_type_id'];
    public $timestamps = false;
    
    public function news_type() {
        return $this->hasOne('App\News_type', "id", "news_type_id");
    }
}
