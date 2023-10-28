<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Users extends Model
{
    //
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
        return $this->hasMany(Order::class,"cid_user")->getResults();
    }
}
