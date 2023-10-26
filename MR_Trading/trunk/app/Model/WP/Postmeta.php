<?php

namespace App\Model\WP;

use Illuminate\Database\Eloquent\Model;

class Postmeta extends Model
{
    //
   protected $connection = 'mysqlWP';

    protected $table="vt_postmeta";
    protected $primary="id";
    public $timestamps=false;
   
     
}
