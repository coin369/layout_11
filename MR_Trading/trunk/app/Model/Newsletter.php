<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    //
    protected $table="ca_newsletter";
    protected $primary="id";
    protected $timestamp=true;
}
