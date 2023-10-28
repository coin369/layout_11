<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    //
    protected $table="ca_newsletter";
    protected $primary="id";
    protected $timestamp=true;
}
