<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\Model\Users as DTUsers;
use Auth;

class SocialController extends AppController
{
    //
    public function facebookredirect(){
    	return Socialite::driver("facebook")->redirect();
    }
    public function facebookcallback(Request $request){


    	if (!$request->has('code') || $request->has('denied')) {
    		$request->session()->flash("success"," Vui lòng thử lại. Đăng nhập bên FACEBOOK không thành công. ");
            return redirect('/dang-nhap');
        }
     
            
             $providerUser = Socialite::driver('facebook')->user(); 
             $id=$providerUser->getId();

             $check_user=DTUsers::where("facebook_id",$id)->first();
             if(empty($check_user)){
                $TNew=new DTUsers();
                $TNew->name = empty($providerUser['name'])? 'name_'.$id : $providerUser['name'];
                $TNew->email = empty($providerUser['email'])? $id.'@facebook.com' : $providerUser['email'];
                $TNew->username = empty($providerUser['nickname']) ? 'facebook_'.$id : $providerUser['nickname'];
                $TNew->phone ='0123456789';
                $TNew->password= bcrypt("facebook_".$id);
                $TNew->facebook_id=$id;
                $TNew->role='2';
                $TNew->save();
                
                $check_user=$TNew;
            }
            //echo $check_user->username;exit;
                    if(Auth::attempt(['username'=>$check_user->username,"password"=>"facebook_".$id],true)){
                            return redirect("/thong-tin-ca-nhan");
                   
                    }
                  $request->session()->flash("success"," Vui lòng thử lại. Đăng nhập bên FACEBOOK không thành công. ");
            return redirect('/dang-nhap');

                    /*
    	$user =Socialite::driver("facebook")->user();
    	dd($user);*/
    }

     public function googleredirect()
    {
        return Socialite::driver("google")->redirect();// ->with(['hd' => 'nuochoadangcap.vn'])->redirect();   
    }


    public function googlecallback(Request $request)
    {



    	if (!$request->has('code')) {
    		$request->session()->flash("success"," Vui lòng thử lại. Đăng nhập bên Google không thành công. ");
            return redirect('/dang-nhap');
        }

    	//dd($request->all());
    	
	    /*	try {
			     $providerUser = Socialite::driver('google')->user(); 
			} catch (InvalidStateException $e) {
			    */

			     $providerUser = (array)Socialite::driver('google')->stateless()->user(); 
		//	}
                 //dd($providerUser);
			    // dd($providerUser);exit;
         
             $id=$providerUser['id'];
             $email=empty($providerUser['email'])? $id.'@gmail.com' : $providerUser['email'];
             $check_user=DTUsers::where("google_id",$id)->first();
             $check_email=DTUsers::where("email","LIKE",$email)->first();
             if(!empty($check_email->id)){
                $check_email->google_id=$id;
                $check_email->save();
                   
                    //Auth::login( $check_email ,true);
                    $my_user=\App\User::find($check_email->id);
                      
                      Auth::login($my_user);
                         
                      //dd(Auth::user());

                      return redirect("/thong-tin-ca-nhan");
                      
                
                    

             }else{


                     if(empty($check_user) && empty($check_email)){
                       // echo 'slkdfj';
                        $TNew=new DTUsers();
                        $TNew->name = empty($providerUser['name'])? 'name_'.$id : $providerUser['name'];
                        $TNew->email = $email;
                        $TNew->username = empty($providerUser['nickname']) ? 'google_'.$id : $providerUser['nickname'];
                        $TNew->phone ='0123456789';
                        $TNew->password= bcrypt("google_".$id);
                        $TNew->google_id=$id;
                        $TNew->role='2';
                        $TNew->save();
                       
                        $check_user=$TNew;
                    }
                    //  dd('abc');
                     if(Auth::attempt(['username'=>$check_user->username,"password"=>"google_".$id],true)){
                            return redirect("/thong-tin-ca-nhan");
                   
                    }

           }
                  
            $request->session()->flash("success"," Vui lòng thử lại. Đăng nhập bên Google không thành công. ");
            return redirect('/dang-nhap');
        /*}catch(Exception $e){
        	dd($e->getMessage());
        }*/
    }

}
