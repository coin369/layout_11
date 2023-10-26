<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
      protected $table="ca_users";
    protected $primary="id";
    protected $timestamp=true;
    public function isAdmin(){
        if(Auth::check()){
            if((int)Auth::user()->role==1){
                return true;
            }
        }
        return false;
    }
    public function isCustomer(){
        if(Auth::check()){
            if((int)Auth::user()->role==2){
                return true;
            }
        }
        return false;
    }
    public function Order(){
        return $this->hasMany(Model\Order::class,"cid_user")->getResults();
    }
}
