<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Youtubecate extends Model
{
    //
     protected $table="ca_youtube_cate";
    protected $primary="id";
    protected $timestamp=true;

     public function Youtube(){
        return $this->hasMany(Youtube::class,"cid_cate")->getResults();
     }
}
