<?php

namespace App\Model\WP;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
   protected $connection = 'mysqlWP';

    protected $table="vt_posts";
    protected $primary="id";
    public $timestamps=false;
   
     
}
