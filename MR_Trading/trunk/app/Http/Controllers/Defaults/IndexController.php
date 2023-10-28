<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\News as DTNews;
use App\Models\News_Cate as DTNewsCate;



use App\Models\Tag as DTTag;


use App\Models\Service as DTService;

use App\Models\Page as DTPage;

use App\Models\Slideshow as DTSlideshow;



//use Spatie\ResponseCache\Facades\ResponseCache;

use Cache;
use URL;
use Artisan;
use DB;

class IndexController extends AppController
{



    public function index(){

      if(isset($_GET['clear_cache'])){

     

              http_response_code(300);
              Cache::flush();
              Artisan::call('config:clear');
              Artisan::call('view:clear');
              Artisan::call('cache:clear');


              Artisan::call('view:cache');
              Artisan::call('route:cache');
              Artisan::call('event:cache');
              Artisan::call('config:cache');

              Artisan::call('optimize');
            //  ResponseCache::clear();


              dd("clear cache 1 OK;");


              exit;
      }

      if(env("APP_ENV")=='local'){
       
        // Cache::flush();
      //   ResponseCache::clear();
      }
       
        
       

    
      $this->View['TNews']=DTNews::where('status','1')->limit(4)->orderBy("id","DESC")->get();
      $this->View['TSlide']=DTSlideshow::where('status','1')->orderBy("position","ASC")->get();

          
    	return view("default.index.index",$this->View);

    }

  

       
         public function notfound(){
                return view("default.index.notfound",$this->View);
         }
}
