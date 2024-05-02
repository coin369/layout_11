<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\General as DTGeneral;
use App\Models\Page as DTPage;
use App\Models\Cate as DTCate;
use App\Models\Banner as DTBanner;
use App\Models\Main as DTMain;

use App\Models\News_Cate as DTNewscate;

use App\Models\Slideshow as DTSlideshow;

use App\Models\News as DTNews;

use App\Models\Seolinks as DTSeolinks;


use Cache;
use URL;
use Session;
use Config;
use DB;
use Redirect;

use Jenssegers\Agent\Agent;

use SEO\Models\Page as SEOPAGE;
use App\Models\Seo as DTSeo;
class AppController extends Controller
{
   protected $View=[];
   public function __construct(Request $request){
      
      
   
      // $my_url= str_replace(Config::get('app.url')."/", '', URL::current());

      // $check_redirect=Cache::remember("my_url_".md5($my_url),0000,function() use ($my_url){
      //       return DTOldPost::where("slug","LIKE","{$my_url}")->first();
      // });

      // if(!empty($check_redirect['id'])){
    
      //   if(!empty($check_redirect['title'])){
      //     $check_new=DTNews::where("name","Like",$check_redirect['title'])->first();

      //     if(!empty($check_new['id'])){
      //           return Redirect::to("/tin-tuc/".$check_new['alias'],301)->send(301);
      //          exit;
      //     }
      //   }
      
      
      // }
          if(env('APP_ENV')=="local"){
//                Cache::flush();
           

          }
   
            

    
        // $agent = new Agent();

     //$this->View['agent']=$agent;


      if (!session()->has('my_token')) {
          //

         session()->push('my_token', md5(date("Ymd H:i:s")) );
      }


       $this->View['my_token'] =session()->get("my_token")[0];
     
      
      $this->View['is_seo']=false;


    
      
      // $check_seo= Cache::remember("App_path_".md5(url()->full()),1000,function(){
      //       $a=  SEOPAGE::where("path",url()->full())->first();
      //       if(empty($a)){
      //           return 1;
      //       }else{
      //           return 2;
      //       }
      // });
      // if($check_seo==2){

      //      $this->View['is_seo']=true;
      // }


     
      $this->View['active']='home';

     
      // $this->View['TService']=Cache::remember("App_TSERVICE",200,function(){
      //    return DTService::where("status",'1')->orderBy("id","DESC")->get();
      //  });
      $this->View['TPage_1']=Cache::remember("TPage_1",2000,function(){
         return DTPage::where("status",'1')->orderBy("id","ASC")->get();
       });
      $this->View['TPage_2']=Cache::remember("TPage_2",2000,function(){
         return DTPage::where("status",'2')->orderBy("id","ASC")->get();
       });

      $this->View['DTBanner'] = DTBanner::get(); 
  
      $this->View["TGeneral"]=$General=Cache::remember("App_TGeneral",2000,function(){
        return DTGeneral::find(1);
      });
      $this->View['TSeo']=(array)json_decode($General['seo']);

     
      $this->View['TSocial']=(array)json_decode($General['social']);

        $this->View['TSlide']=DTSlideshow::where('status','1')->orderBy("position","ASC")->get();
    //  Cache::flush();

     
      $this->View['DTMain_1'] = DTMain::where("alias",'1')->orderBy("id","ASC")->get();
      $this->View['DTMain_2'] = DTMain::where("alias",'2')->orderBy("id","ASC")->get();
      $this->View['DTMain_3'] = DTMain::where("alias",'3')->orderBy("id","ASC")->get();
       $this->View['DTMain_4'] = DTMain::where("alias",'4')->orderBy("id","ASC")->get();

     



    }
 
}
