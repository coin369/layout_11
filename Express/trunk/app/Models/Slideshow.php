<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    //
    protected $table="ca_slideshow";
    protected $primary="id";
    protected $timestamp=true;

    public function Main(){
        return $this->belongsTo(Main::class,"cid_main")->getResults();
    }
}
