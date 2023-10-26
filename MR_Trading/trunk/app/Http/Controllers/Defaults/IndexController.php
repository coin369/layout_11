<?php

namespace App\Http\Controllers\Defaults;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Model\News as DTNews;
use App\Model\News_Cate as DTNewsCate;
use App\Model\Product as DTProduct;

use App\Model\Banner as DTBanner;

use App\Model\Cate as DTCate;


use App\Model\Tag as DTTag;


use App\Model\Service as DTService;
use App\Model\Youtube as DTYoutube;
use App\Model\Youtubecate as DTYoutubeCate;
use App\Model\Page as DTPage;

use App\Model\BK as DTBK;

use App\Model\Educate as DTEducate;

use App\Model\Rating as DTRating;




use Vitalybaev\GoogleMerchant\Feed;
use Vitalybaev\GoogleMerchant\Product AS Feed_Product;
use Vitalybaev\GoogleMerchant\Product\Shipping;
use Vitalybaev\GoogleMerchant\Product\Availability\Availability;


//use Spatie\ResponseCache\Facades\ResponseCache;
use Sitemap;
use Cache;
use URL;
use Artisan;
use DB;
use Youtube;
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
       
        
       $cate=$this->View['TCate'];

     
      //  $this->View['TProduct_hot']=Cache::remember("Index_Product_Hot",10,function() use ($cate){
      //    $resutl=[];
      //    foreach($cate as $k=>$c){
      //      $resutl[$c->id]=DTProduct::where("status","1")->where("is_hot","2")
      //             ->whereRaw(DB::raw("cid_cate IN (SELECT id FROM pro_cate WHERE cid_parent=".$c['id'].")"))
      //             ->orderBy("id","DESC")
      //             ->limit(($k+1)*4)
      //             ->get();
      //    }

       
      //       return $resutl; 
      // });
      
    
      $this->View['TNews']=Cache::remember("Index_News2",200,function(){
          return DTNews::where('status','1')->limit(4)->orderBy("id","DESC")->get();
      });
    
        $this->View['TService']=Cache::remember("Index_SERVICE",100,function(){
          return  DTService::where('status','1')->orderBy("id","DESC")->limit(3)->get();
      });

          $this->View['TProductHot']=Cache::remember("Product_Cate_HOT",2000,function(){
                return DTProduct::where("status","1")->where("is_hot","2")->orderBy('id',"DESC")->limit(8)->get();
            });
     
        
          $this->View['TRating']=Cache::remember("DTRating",100,function(){
              return  DTRating::orderBy("id","DESC")->get();
          });
        

      $this->View['TEducate']=Cache::remember("Index_TEducate",200,function(){
                return DTEducate::where('status','1')->where('is_home','1')->limit(11)->orderBy("id","DESC")->get();
            });
 

    	return view("default.index.index",$this->View);

    }

     public function feed(){
            $this->View['news'] = DTNews::where('status', '2')
                            ->orderBy("id","DESC")
                            ->get();

      
       $contents = view('default.index.feed',$this->View);
        return response($contents)->header('Content-Type', 'application/xml');

        return view('default.index.feed',$this->View);
    }
    public function feedproduct(){
           $this->View['product'] = DTProduct::where('status', '1')

                            ->orderBy("id","DESC")
                           // ->limit(100)
                            ->get();

      
       $contents = view('default.index.feedproduct',$this->View);
        return response($contents)->header('Content-Type', 'application/xml');

        return view('default.index.feed',$this->View);
    }
    public function sitemap(Request $request){
             $server= route('home');
        

             $mydate=Date("Y-m-d");
            
         

            Sitemap::addSitemap($server."/sitemap/product.xml",$mydate);

    
             Sitemap::addSitemap($server."/sitemap/news.xml",$mydate);

              Sitemap::addSitemap($server."/sitemap/picture.xml",$mydate);
           
         
           for($i=1;$i<9;$i++){
                 Sitemap::addSitemap($server."/sitemap/{$i}_tag.xml",$mydate);
           }
           
        
       
        return Sitemap::renderSitemapIndex();
    }
    public function sitemapkey($key){

        $server= route('home');
        

        $mydate=Date("Y-m-d");
       
          
           if($key=="product.xml"){

               $product=DTProduct::where('status','1')->get();

               foreach ($product as $c) {
                    Sitemap::addTag( route('detail',['alias'=>$c['alias']]) ,$mydate,'monthly','1');
                   
                }
                
        
                
                return Sitemap::render();
           }


           
            if($key=="news.xml"){
            
                $news = DTNews::where("status","1")->get();
                foreach ($news as $c) {
                    Sitemap::addTag(route('news.cate',['alias'=>$c['alias']]),$mydate,'monthly','0.8');
                   
                }
                return Sitemap::render();
           }

            if($key=="picture.xml"){
            
                $p = DTProduct::where("status","1")->get();
                foreach ($p as $c) {

                     $tag = Sitemap::addTag(route('detail',['alias'=>$c['alias']]), $mydate, 'monthly', '0.8');

                    $tag->addImage(route('home')."/public/upload/product/".$c['picture'],$c['name'],"",$c['name'],route('detail',['alias'=>$c['alias']]));

                    foreach(json_decode($c['multi_picture'],true) as $k=>$m){
                        $tag->addImage(route('home')."/public/upload/product/".$m,$c['name']." ".$k,"",$c['name']." ".$k,route('detail',['alias'=>$c['alias']]));
                    }
                }
                return Sitemap::render();
           }
          


          if($key=="video.xml"){
            
               
            $this->View['TYoutube']=Cache::remember("Index_TBannerTBanner",21200,function(){
                return DTYoutube::orderBy('orderby','ASC')->orderBy('id',"DESC")->get();
            });
                return response()->view("default.index.video",$this->View)->header('Content-Type', 'text/xml');

               
           }
          
            
           if(strpos($key, "tag.xml")==true){
               $t= explode("_", $key);

               
              // echo DTTag::where("alias","!=","")->count();exit;
                $num= $t[0] ? 1*$t[0] :1;
                  
                $offet = round( DTTag::where("alias","!=","")->count()/10+1 );
                $limit= ($num-1)*$offet;
/*
                echo $offet."<br />";
                echo $limit;

                exit;*/

                 $cate=DTTag::where("alias","!=","")->limit($offet)->offset($limit)->get();
                foreach ($cate as $c) {
                  Sitemap::addTag($server."/tim-kiem/".$c['alias'],$mydate,'monthly','0.5');

                }
                
                return Sitemap::render();
           }

           if($key=='google_feed.xml'){
                 header('Content-type: application/xml');
              $t= $this->GoogleFeed();

              return response($t, 200)->header('Content-Type', 'application/xml');

            return $t;
                
           }
       
        
        }
        public function aa(){
          if(isset($_GET['a'])){

              $x=   DTBK::where('post_type','post')->where("post_status","!=",'auto-draft')->get();
               foreach($x as $y){
                   if(!empty($y->post_title)){
                     $a=new DTNews();
                     $a->name=$y->post_title;
                     $a->alias=\App\MrData::toAlias2($y->post_title).rand(1,100000);
                     $a->slug=\App\MrData::toAlias2($y->post_title);
                     $a->status='1';
                     $a->is_hot='1';
                     $a->picture=\App\MrData::toAlias2($y->post_title).".png";
                     $a->description=date("Y/m",strtotime($y->post_date) );
                     $a->content=str_replace("/wp-content/uploads","/public/upload/user_upload/images", $y->post_content);
                     $a->cid_cate=3;
                     $a->cid_user=1;
                     $a->seo=$y->post_type;
 
                     $a->rating=1;
                     $a->viewer=rand(1,1999);
                     $a->save();
                 }
 
                 $page=   DTBK::where('post_type','page')->where("post_status","!=",'auto-draft')->get();
                  // var_dump($y->ID);exit;
               }
                 dd("clear cache;");
                 exit;
         }
 
        
       if(isset($_GET['b'])){
            
              $x=   DTBK::where('post_type','page')->where("post_status","!=",'auto-draft')->get();
               foreach($x as $y){
                   if(!empty($y->post_title)){
                     $a=new DTPage();
                     $a->name=$y->post_title;
                     $a->alias=\App\MrData::toAlias2($y->post_title);
                  
                     $a->status='1';
                    
                  
                     $a->content=str_replace("MY_DOMAIN/wp-content/uploads","/public/upload/user_upload/images", $y->post_content);
                   
                     $a->save();
                 }
 
                 $page=   DTBK::where('post_type','page')->where("post_status","!=",'auto-draft')->get();
                  // var_dump($y->ID);exit;
               }
                 dd("clear ok;");
                 exit;
         }
 
         if(isset($_GET['clear_cache'])){
                     http_response_code(300);
                     Cache::flush();
                     Artisan::call('config:clear');
                     Artisan::call('view:clear');
                     Artisan::call('cache:clear');
 
                     dd("clear cache;");
                     exit;
        }
      
         }


       
         public function notfound(){
                return view("default.index.notfound",$this->View);
         }
}
